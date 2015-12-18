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
				assessselector("exam");
				echo '<h2>Note: There are two tools you could use to set quizzes, tests and exams. Please follow the links to find out about each to determine which is best for you.</h2>';
				selectortooldetail("quiz","");
				selectortooldetail("qmp","");

			?>
			
			
		</div><!-- Main-Content -->
	<?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>

