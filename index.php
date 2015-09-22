<!DOCTYPE html>
<?php
require ('includes/head.php');
require ('lib.php');
?>

<body role="document">
<div class="main-container indexpage">
	<header class="page-title">
		<img src="images/logo.png" alt="Logo" title="Logo">
		<h1>UniLearn ToolGuide and Tool Selector</h1>
	</header>

	<div class="main-content">
		<div class="row clearfix flex-container">
			<div class="panel panel-success flex-item">
				<a href="toolguide.php" alt="Link to ToolGuide">
					<div class="panel-heading">
						<h3><i class="fa fa-map-o"></i>Tool Guide</h3>
					</div>
				</a>
				<div class="panel-body">
					<h4>View the guide as an interactive online grid<br>Click each tool title for additional information about that tool</h4>
				</div>
			</div>
			<div class="panel panel-success flex-item">
				<a href="toolselector/selector.php" alt="Link to ToolSelector">
					<div class="panel-heading">
						<h3><i class="fa fa-map-signs"></i>Tool Selector</h3>
					</div>
				</a>
				<div class="panel-body">
					<h4>Choose an appropriate tool based on a decision tree of what you want to achieve</h4>
				</div>
			</div>
		</div><!-- Row -->
	</div><!-- Main-Content -->
	
	<div class="footer">
		<div class="well credits">
		<h3>Adapted by the USW TELT (University of South Wales Technology Enhanced Learning Team) from a development by Richard Oelmann (@Oelmann_Richard) of the original <a href="http://www.cats-pyjamas.net/moodle-tool-guide/ alt="Moodle Tool Guide">Moodle Tool Guide</a> by Joyce Seitzinger (@catspyjamasnz) and the <a href="http://www.somerandomthoughts.com/blog/2012/03/15/a-moodle-2-version-of-the-moodle-tool-guide/" alt="Moodle2 Tool Guide">Moodle 2 Tool Guide</a> by Gavin Henrick (@ghenrick)</h3>
			<h3>The Tool Selector is based on the concepts and the overview of the <a href="https://dl.dropboxusercontent.com/u/423876/Moodle/Index.html" alt="Tool selector link">Tool Selection Decision Tree</a> by Alison Ruth</h3>
			<p><img src="images/by-nc-sa.png" alt="Creative Commons licence - by, nc, sa"> As defined in the original, this work is released under a <a href="https://creativecommons.org/licenses/">Creative Commons, with attribution, non-commercial, share-alike licence.</a></p>
		</div>
	</div><!-- footer -->
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>
