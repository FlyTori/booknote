<h2><?php echo h($book['Book']['book_name']); ?></h2>

<ul class="list-unstyled">
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

