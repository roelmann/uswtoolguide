<!DOCTYPE html>
<?php
require ('includes/head.php');
require ('lib.php');
?>

<body role="document">
<div class="main-container">
    <?php require ('includes/header.php'); ?>

        <div class="main-content">
            <div class="maintitlerow">
                <?php require ('tools/title.php'); ?>
            </div>

            <?php // Display all tools in alphabetical order - if a file exists print it!
            $files = array();
            foreach (new FilesystemIterator('tools') as $filename) {
                $files[] = $filename;
            }
            usort($files, strcasecmp);
            foreach ($files as $filename) {
                if ($filename != 'tools/title.php') {
                    require ($filename);
                }
            }
            ?>

        </div><!-- Main-Content -->
    <?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>
