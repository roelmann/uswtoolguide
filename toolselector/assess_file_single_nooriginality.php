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
				assessselector("file");
				assess_fileselector("single");
				assess_file_singleselector("nooriginality");
				selectortooldetail("assignments","");
			?>
			
			
		</div><!-- Main-Content -->
	<?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>

