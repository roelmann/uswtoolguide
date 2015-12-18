<!DOCTYPE html>
<?php
require ('includes/head.php');
require ('lib.php');
?>

<body role="document">
<div class="main-container indexpage">
	<header class="page-title">
		<img src="images/logo.png" alt="Logo" title="Logo">
		<h1>UniLearn Tools</h1>
		<p><br></p><p><br></p>
		<h2>Tool Guide and Tool Selector</h2>
	</header>
<div class="panel panel-danger panel-heading">
    <p><strong>Note to self/Unilearn team: </strong> TODO:<br>Tool content for - Course Link, Emails, Journals, PeerMark, Portfolios<br>TEACH content - review or create holding pages for - Blog, Wiki, Journal, Portfolio, Glossary</p>
</div>
    <p><br></p>

	<div class="main-content">
		<div class="row clearfix flex-container">
			<div class="panel panel-success flex-item">
				<a href="toolindex.php" alt="Link to ToolIndex">
					<div class="panel-heading">
						<h3><i class="fa fa-map-o"></i>Tool index</h3>
					</div>
				</a>
				<div class="panel-body">
					<h4>View a simple index of the tools</h4>
				</div>
			</div>

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
		<div class="well">
			<p>This Tool Guide and Tool Selector is designed to help tutors to make use of the tools within UniLearn to enhance their teaching and learning. It is split into 3 elements:</p>
			<ul>
				<li><strong>A simple index</strong> - this is a straightforward list of tools, which are clickable links to the detail provided by the larger guide table. It is an easy to follow alphabetical list - but the detail is not shown until you click the links.</li>
				<li><strong>A full Tool Guide</strong> - this is a large table which shows the outline information for each tool and identifies areas where it is strongest and most appropriate for use. Each tool can be clicked on for additional information and links to TEACH and other resources.</li>
				<li><strong>A Tool Selector</strong> - This is a 'branching database' or 'decision tree' which can be used to help select the most appropriate tool for a given purpose. Simply choose an option from each step to find a recommended tool for your purpose.</li>
			</ul>
			<p>Each page has links to easily switch between these options, while clicking the USW logo will return you to this home page.<br>There is also an option to print the full tool guide - this will take you to a printable page where you can use your browser print button (or menu option) to send the whole document (around 30 pages) or individual pages to your printer. These printable pages will also include the additional information detail available from the links in the Tool Guide.</p>
		</div>

	</div><!-- Main-Content -->
	
	<div class="footer">
		<div class="well credits">
		    <p>Adapted by the USW TELT (University of South Wales Technology Enhanced Learning Team) from a development by Richard Oelmann (@Oelmann_Richard) of the original <a href="http://www.cats-pyjamas.net/moodle-tool-guide/ alt="Moodle Tool Guide">Moodle Tool Guide</a> by Joyce Seitzinger (@catspyjamasnz) and the <a href="http://www.somerandomthoughts.com/blog/2012/03/15/a-moodle-2-version-of-the-moodle-tool-guide/" alt="Moodle2 Tool Guide">Moodle 2 Tool Guide</a> by Gavin Henrick (@ghenrick)</p>
		    <p>The Tool Selector is based on the concepts and the overview of the <a href="https://dl.dropboxusercontent.com/u/423876/Moodle/Index.html" alt="Tool selector link">Tool Selection Decision Tree</a> by Alison Ruth</p>
			<p><img src="images/by-nc-sa.png" alt="Creative Commons licence - by, nc, sa"> As defined in the original, this work is released under a <a href="https://creativecommons.org/licenses/">Creative Commons, with attribution, non-commercial, share-alike licence.</a></p>
		</div>
	</div><!-- footer -->
</div><!-- Main-Container -->

<?php require ('includes/foot.php'); ?>
