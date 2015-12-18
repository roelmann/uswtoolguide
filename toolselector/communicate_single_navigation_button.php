<!DOCTYPE html>
<?php
require ('includes/head.php');
require ('../lib.php');
?>

<body role="document">
<div class="main-container">
	<?php require ('includes/header.php'); ?>

		<div class="selector-main-content">
			
			<?php
				firstselector("transfer");
				communicateselector("single");
				communicate_singleselector("navigation");
				communicate_single_navigationselector("button");
			?>
			<div class="well">
				<p>You will find information and guides about how to add Navigation Menu items to your module on the <a href="http://teach.southwales.ac.uk/blackboard/building/">Building your Modules pages of TEACH</a>.</p>
			</div>
			
			
		</div><!-- Main-Content -->
	<?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>

