<!DOCTYPE html>
<?php
require ('includes/head.php');
require ('lib.php');
?>

<body role="document">
<div class="main-container toolindex">
    <?php require ('includes/header.php'); ?>

        <div class="main-content">

            <?php // Display all tools in alphabetical order - if a file exists print it!
            $files = array();
            foreach (new FilesystemIterator('tools') as $filename) {
                $files[] = $filename;
            }
            usort($files, strcasecmp);
            foreach ($files as $filename) {
                if ($filename != 'tools/title.php') {
					$toolname = substr ($filename, 6, strlen($filename)-10);
					?>
					<div style="display:none; visibility:hidden">
						<?php require($filename)?>
					</div>
					<form class="" action="detail.php" method="post" >
						<input type="hidden" name="tooltype" value="<?php echo $toolname;?>" >

						<button type="submit" class="panel panel-info row-header">
						<div class="panel-heading flexpanelheading">
							<h3 class="panel-title"><?php echo $title;?></h3>
						</div>
						</button>
					</form>
					<?php
                }
            }
            ?>

        </div><!-- Main-Content -->
    <?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>
