<h2><?php echo h($book['Book']['book_name']); ?></h2>

<ul class="list-unstyled">
	<li><img src="http://placehold.it/150x200"></li>
	<li><strong>Title: </strong><?php echo h($book['Book']['book_name']) ?></li>
	<li><strong>Author: </strong><?php echo h($book['Book']['author']) ?></li>
	<li><strong>Publish Year: </strong><?php echo h($book['Book']['publish_year']) ?></li>
	<li><strong>Category: </strong><?php echo h($book['Book']['category']) ?></li>
	<li><strong>ISBN: </strong><?php echo h($book['Book']['isbn']) ?></li>
	<li><strong>Introduce: </strong><?php echo h($book['Book']['discription']) ?></li>
	<li><strong>Pages: </strong><?php echo h($book['Book']['pages']) ?></li>
	<li><strong>Rate: </strong><?php echo h($book['Book']['overall_rate']) ?></li>
	<li><strong><?php echo $this->Html->link('Buy it', h($book['Book']['amazon_link'])); ?></strong></li>
	<p>
		<button type="button" class="btn btn-default btn-sm">
		<?php echo $this->Html->link('Edit', array('action'=>'edit', $book['Book']['id'])); ?>
		</button>
		<button type="button" class="btn btn-default btn-sm"><?php echo $this->Form->postLink('Delete', array('action'=>'delete', $book['Book']['id']),array('confirm'=>'Are You Sure?'));  ?></button>
	</p>
</ul>

<h2>Reviews</h2>
<?php foreach($book['Review'] as $review): ?>
<div id="review_<?php echo h($review['id']); ?>">
	<ul class="list-unstyled">
		<li><h4><?php echo h($review['review_title']) ?></h4></li>
		<li><strong>Rating: </strong><?php echo h($review['rating']) ?></li>
		<li><?php echo h($review['comment']) ?></li>
	</ul>
	<?php echo $this->Html->link('削除', '#', array('class'=>'delete', 'data-review-id'=>$review['id']));
	?>
	<br>
</div>
<?php endforeach;  ?>

<h2>Add Review</h2>
<?php 
	echo $this->Form->create('Review', array(
		'action'=>'add',
		'inputDefaults' => array(
			'div' => 'form-group',
			'wrapInput' => false,
			'class' => 'form-control'
			),
		)
	); 
?>
<?php echo $this->Form->input('review_title'); ?>
<?php echo $this->Form->input('rating'); ?>
<?php echo $this->Form->input('comment', array('rows'=>5)); ?>
<?php echo $this->Form->input('book_id', array('type'=>'hidden', 'value'=>$book['Book']['id'])); ?>
<?php
	// echo $this->Form->input('Review.book_id', array('type'=>'hidden', 'value'=>$book['Book']['id'])); 
	// Review. は省略できます
?>
<?php echo $this->Form->end('book review'); ?>

<script>

$(function() {
    $('a.delete').click(function(e) {
        if (confirm('sure?')) {
        	$.post('<?php
          echo($this->HTML->url(array("controller"=>"reviews","action"=>"delete"))); ?>/'+$(this).data('review-id'), {}, function(res) {
             $('#review_'+res.id).fadeOut();
             }, "json");
        }
        return false;
    });
});

</script>
