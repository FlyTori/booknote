<h2><?php echo h($book['Book']['book_name']); ?></h2>

<ul>
	<li>Title: <?php echo h($book['Book']['book_name']) ?></li>
	<li>Author: <?php echo h($book['Book']['author']) ?></li>
	<li>Publish Year: <?php echo h($book['Book']['publish_year']) ?></li>
	<li>Category: <?php echo h($book['Book']['category']) ?></li>
	<li>ISBN: <?php echo h($book['Book']['isbn']) ?></li>
	<li>Introduce: <?php echo h($book['Book']['discription']) ?></li>
	<li>Pages: <?php echo h($book['Book']['pages']) ?></li>
	<li>Rate: <?php echo h($book['Book']['overall_rate']) ?></li>
	<li>Buy it: <?php echo h($book['Book']['amazon_link']) ?></li>
</ul>