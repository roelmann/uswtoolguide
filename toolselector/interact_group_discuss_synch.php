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
				firstselector("interact");
				interactselector("group");
				interact_groupselector("discuss");
				interact_group_whenselector("now");
				selectortooldetail("collaborate","");
			?>
			
			
		</div><!-- Main-Content -->
	<?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>

