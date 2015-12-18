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
				assess_presentationselector("file");
				assess_presentation_fileselector("single");
				assess_presentation_file_singleselector("originality");
				assess_presentation_file_single_originalityselector("tutor");
				selectortooldetail("turnitin","");

			?>
			
			
		</div><!-- Main-Content -->
	<?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>

