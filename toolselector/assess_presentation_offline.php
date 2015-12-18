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
				firstselector("assess");
				assessselector("presentation");
				assess_presentationselector("offline");
				echo '<h2>Note: There are two tools you could use to set assignments with no electronic submission - but still use the tool for providing feedback in a familiar way. Please follow the links to find out about each to determine which is best for you.</h2>';
				selectortooldetail("assignments","");
				selectortooldetail("turnitin","");
			?>
			
			
		</div><!-- Main-Content -->
	<?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>

