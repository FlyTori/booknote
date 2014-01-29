<h2>All books</h2>

<ul class="list-unstyled">

	<div class="row">
	<?php foreach ($books as $book): ?>
	<li>
		<div class="col-md-2">
			<div class="actions">
				<div class="panel panel-default text-center">
					<ul class="list-unstyled">
					<li><img src="http://placehold.it/150x200"></li>
					<li id="book_<?php echo h($book['Book']['id']); ?>"></li>
					<li><?php echo $this->Html->link($book['Book']['book_name'],'/books/view/'.$book['Book']['id']); ?></li>
					<li>Author: <?php echo h($book['Book']['author']); ?></li>
					<li>Category: <?php echo h($book['Book']['category']); ?></li>
					</li>
					</ul>
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 2 -->
	</li>
	<?php endforeach ?>
	</div>
</ul>

  <button type="button" class="btn btn-default btn-lg"><?php echo $this->Html->link('Add another book', array('controller'=>'books','action'=>'add')); ?></button>
