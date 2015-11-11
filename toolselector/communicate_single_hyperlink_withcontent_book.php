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
				communicate_singleselector("hyperlink");
				communicate_single_hyperlinkselector("content");
				communicate_single_hyperlink_contentselector("book");
				selectortooldetail("learningmodule","");
			?>
			
			
		</div><!-- Main-Content -->
	<?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>

