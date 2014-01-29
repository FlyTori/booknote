<!DOCTYPE html>
<html lang="en">
  <head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
        echo $this->Html->css('bootstrap.min');
        // echo $this->Html->css('bootstrap');
    ?>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <style type="text/css">
    	body{ padding: 70px 0px; }
    </style>

  </head>

  <body>

    <?php echo $this->Element('navigation'); ?>

    <div class="container">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
        <footer>
        </footer>
    </div><!-- End of Container -->

    <?php 
    // show details
    // echo $this->element('sql_dump');
    ?>
    
    <?php 
    // show error message
    echo $this->Session->flash('auth'); 
    ?>
    
<script>
    $(function() {
        $('#flashMessage').fadeOut("slow");
    }, 2000);
</script>

  </body>
</html>
