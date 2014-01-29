<h2>Add a book</h2>
<?php 
	echo $this->Form->create('Book');
	echo $this->Form->input('book_name');
	echo $this->Form->input('author');
	echo $this->Form->input('publish_year');
	echo $this->Form->input('category');
	echo $this->Form->input('isbn');
	echo $this->Form->input('discription');
	echo $this->Form->input('pages');
	echo $this->Form->input('amazon_link');
	echo $this->Form->end('Submit');
?>

