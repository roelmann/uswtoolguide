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
				communicate_single_navigationselector("template");
			?>
			<div class="well">
				<p>You will find information about the USW standard module template and minimum guidelines at:</p>
				<p><a href = 'http://teach.southwales.ac.uk/policies/minimum/'>Minimum Guidelines on TEACH</a> which also has links to the Enhancing Learning with Technology organisation on Blackboard where you can undertake a series of self-directed activities.</p>
			</div>

			
		</div><!-- Main-Content -->
	<?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>

