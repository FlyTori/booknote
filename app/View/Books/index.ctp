<h2>All Books</h2>

<ul>
	<?php foreach ($books as $book): ?>
	<li>
	<?php
	echo h($book['Book']['book_name'])
	?>
	</li>
	<?php endforeach ?>
</ul>