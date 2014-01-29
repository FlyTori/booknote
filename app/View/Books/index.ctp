<h2>All books</h2>

<ul>
	<?php foreach ($books as $book): ?>
	<li id="book_<?php echo h($book['Book']['id']); ?>">
	<?php echo $this->Html->link($book['Book']['book_name'],'/books/view/'.$book['Book']['id']); ?>
	<?php echo $this->Html->link('Edit', array('action'=>'edit', $book['Book']['id'])); ?>
	<?php echo $this->Form->postLink('Delete', array('action'=>'delete', $book['Book']['id']),array('confirm'=>'Are You Sure?')); ?>
	</li>
	<?php endforeach ?>
</ul>

<h2>Add a book</h2>
<?php
	echo $this->Html->link('Add a book', array('controller'=>'books','action'=>'add'));
?>