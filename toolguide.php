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
			
			<?php
			require ('tools/announce.php');
			require ('tools/assignments.php');
			require ('tools/audienceresponse.php');
			require ('tools/audio.php');
			require ('tools/blankpage.php');
			require ('tools/blog.php');
			require ('tools/chat.php');
			require ('tools/collaborate.php');
			require ('tools/content.php');
			require ('tools/courselink.php');
			require ('tools/email.php');
			require ('tools/file.php');
			require ('tools/folder.php');
			require ('tools/forum.php');
			require ('tools/glossary.php');
			require ('tools/image.php');
			require ('tools/journal.php');
			require ('tools/learningmodule.php');
			require ('tools/lecturecast.php');
			require ('tools/lessonplan.php');
			require ('tools/modulepage.php');
			require ('tools/qmp.php');
			require ('tools/quiz.php');
			require ('tools/scorm.php');
			require ('tools/screensharing.php');
			require ('tools/survey.php');
			require ('tools/turnitin.php');
			require ('tools/url.php');
			require ('tools/video.php');
			require ('tools/wiki.php');?>

		</div><!-- Main-Content -->
	<?php require ('includes/footer.php');?>
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>
