<h2>All Books</h2>

<ul>
	<?php foreach ($books as $book): ?>
	<li>
	<?php
	// Static
	// echo h($book['Book']['book_name'])
	// 
	//echo $this->Html->link($book['Book']['book_name'],'/books/view/'.$book['Book']['id']);
	echo $this->Html->link($book['Book']['book_name'],'/books/view/'.$book['Book']['id']);
	?>
	</li>
	<?php endforeach ?>
</ul>