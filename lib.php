<?php
function toolpanel ($title,$style, $text) {
	if ($style=='success') {
		$icon='check-square-o';
	}
	if ($style=='warning') {
		$icon='exclamation-triangle';
	}
	if ($style=='danger') {
		$icon='times-circle';
	}
	if ($style=='') {
		$style='info';
		$icon='circle';
	}

?>

			<div class=<?php echo '"panel panel-'.$style.' flex-item flex-container"'; ?>>

				<div class="panel-heading flex-inner">
					<h3 class="toolpanel-title panel-title"><?php echo $title;?></h3>
					<i class=<?php echo '"fa fa-3x fa-'.$icon.'"'; ?> data-toggle="popover" data-content="<?php echo $text?>"></i>
					<p class="comment"><?php echo $text;?></p>
				</div>
			</div>
<?php
}

function toolname ($name, $title, $text, $software, $additional) {
?>
		<form class="flex-item row-header flexrowheader" action="detail.php" method="post" >
			<input type="hidden" name="tooltype" value="<?php echo $name;?>" >
			<input type="hidden" name="additional" value="<?php echo $additional;?>" > 

			<button type="submit" class="panel panel-info flex-item row-header flexrowheader">
				<div class="panel-heading flexpanelheading">
					<h3 class="panel-title"><?php echo $title;?></h3>
					<p class="tool-description"><?php echo $text;?></p>
					<p class="tool-software"><?php echo $software;?></p>
				</div>
			</button>
		</form>

<?php
}

function tooldetail ($name, $additional) {
	$filename='tools/'.$name.'.php';
?>
	<div class="main-container">

		<div class="main-content detail">
			<a href="toolguide.php">
				<i class="fa fa-2x fa-reply">Return to Main Page</i>
			</a>
			<p><br /></p>
			<?php require ($filename); ?>

			<div class='additional panel panel-info'>
				<div class="panel-body">
					<?php echo $additional; ?>
				</div>
			</div>

		</div><!-- Main-Content -->
	</div><!-- Main-Container -->

<?php require ('includes/foot.php');
}

function selectortooldetail ($name, $additional) {
	$filename='tools/'.$name.'.php';
?>
	<div class="main-container">

		<div class="main-content detail">
			<i class="fa fa-2x fa-check-square-o">The recommended tool is...</i>
			<p><br /></p>
			<?php require ($filename); ?>

			<div class='additional panel panel-info'>
				<div class="panel-body">
					<?php echo $additional; ?>
				</div>
			</div>

		</div><!-- Main-Content -->
	</div><!-- Main-Container -->

<?php require ('includes/foot.php');
}

function firstselector ($selected) {
	$transferpanel=$assesspanel=$interactpanel=$cocreatepanel="panel panel-success flex-item";
	if ($selected=="transfer") {$transferpanel="panel panel-warning flex-item";}
	if ($selected=="assess") {$assesspanel="panel panel-warning flex-item";}
	if ($selected=="interact") {$interactpanel="panel panel-warning flex-item";}
	if ($selected=="cocreate") {$cocreatepanel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="transfer.php" class="<?php echo $transferpanel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Transfer Information</h4>
					</div>
				</a>
				<a href="assess.php" class="<?php echo $assesspanel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Assess</h4>
					</div>
				</a>
				<a href="interact.php" class="<?php echo $interactpanel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Communicate and Interact</h4>
					</div>
				</a>
				<a href="cocreate.php" class="<?php echo $cocreatepanel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Co-Create Content</h4>
					</div>
				</a>
			</div>
<?php
}
function transferselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-success flex-item";
	if ($selected=="else") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="interactive") {$two_panel="panel panel-warning flex-item";}
	if ($selected=="static") {$three_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="trans_else.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>From Somewhere else</h4>
					</div>
				</a>
				<a href="trans_interactive.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Interactive</h4>
					</div>
				</a>
				<a href="trans_static.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Static</h4>
					</div>
				</a>
			</div>
<?php
}
function trans_interactiveselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-success flex-item";
	if ($selected=="guided") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="update") {$two_panel="panel panel-warning flex-item";}
	if ($selected=="media") {$three_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="trans_inter_guided.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>As a guided enquiry</h4>
					</div>
				</a>
				<a href="trans_inter_update.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Updatable</h4>
					</div>
				</a>
				<a href="trans_inter_media.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>With multimedia</h4>
					</div>
				</a>
			</div>
<?php
}
function trans_interactive_mediaselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-success flex-item";
	if ($selected=="embedded") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="external") {$two_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="trans_inter_media_embed.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Embedded</h4>
					</div>
				</a>
				<a href="trans_inter_media_external.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Developed externally</h4>
					</div>
				</a>
			</div>
<?php
}
function trans_staticselector ($selected) {
	$one_panel=$two_panel=$three_panel=$four_panel="panel panel-success flex-item";
	if ($selected=="print") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="online") {$two_panel="panel panel-warning flex-item";}
	if ($selected=="series") {$three_panel="panel panel-warning flex-item";}
	if ($selected=="large") {$four_panel="panel panel-warning flex-item";}

?>
				<div class="flex-container">
				<a href="trans_static_print.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>As a printable page</h4>
					</div>
				</a>
				<a href="trans_static_online.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Viewable online within the VLE</h4>
					</div>
				</a>
				<a href="trans_static_series.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>As a series of pages</h4>
					</div>
				</a>
				<a href="trans_static_large.php" class="<?php echo $four_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>A large amount</h4>
					</div>
				</a>

			</div>
<?php
}

function assessselector ($selected) {
	$one_panel=$two_panel=$three_panel=$four_panel=$five_panel="panel panel-success flex-item";
	if ($selected=="test") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="offline") {$two_panel="panel panel-warning flex-item";}
	if ($selected=="understand") {$three_panel="panel panel-warning flex-item";}
	if ($selected=="self") {$four_panel="panel panel-warning flex-item";}
	if ($selected=="group") {$four_panel="panel panel-warning flex-item";}

?>
				<div class="flex-container">
				<a href="assess_test.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Test knowledge</h4>
					</div>
				</a>
				<a href="assess_offline.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Traditional (Offline) Assessment</h4>
					</div>
				</a>
				<a href="assess_understand.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Understanding Implications</h4>
					</div>
				</a>
				<a href="assess_self.php" class="<?php echo $four_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Self-Assessment</h4>
					</div>
				</a>
				<a href="assess_group.php" class="<?php echo $five_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Group Work</h4>
					</div>
				</a>

			</div>
<?php
}
function assess_testselector ($selected) {
	$one_panel=$two_panel="panel panel-success flex-item";
	if ($selected=="quick") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="depth") {$two_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="assess_test_quick.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Quick test</h4>
					</div>
				</a>
				<a href="assess_test_depth.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Test more depth</h4>
					</div>
				</a>
			</div>
<?php
}
function assess_groupselector ($selected) {
	$one_panel=$two_panel="panel panel-success flex-item";
	if ($selected=="collaborative") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="discussion") {$two_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="assess_group_collaborative.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Collaborative</h4>
					</div>
				</a>
				<a href="assess_group_discussion.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Discussion based</h4>
					</div>
				</a>
			</div>
<?php
}
function assess_group_discussionselector ($selected) {
	$one_panel=$two_panel="panel panel-success flex-item";
	if ($selected=="synch") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="asynch") {$two_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="assess_group_discussion_synch.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Synchronous</h4>
					</div>
				</a>
				<a href="assess_group_discussion_asynch.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Asynchronous</h4>
					</div>
				</a>
			</div>
<?php
}

function assess_selfselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-success flex-item";
	if ($selected=="repeat") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="peer") {$two_panel="panel panel-warning flex-item";}
	if ($selected=="reflect") {$three_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="assess_self_repeat.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Repeatable</h4>
					</div>
				</a>
				<a href="assess_self_peer.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Peer</h4>
					</div>
				</a>
				<a href="assess_self_reflect.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Reflective</h4>
					</div>
				</a>

			</div>
<?php
}

function interactselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-success flex-item";
	if ($selected=="qa") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="group") {$two_panel="panel panel-warning flex-item";}
	if ($selected=="cohort") {$three_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="interact_qa.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Q&A Sessions</h4>
					</div>
				</a>
				<a href="interact_group.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Groups</h4>
					</div>
				</a>
				<a href="interact_cohort.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Whole cohort</h4>
					</div>
				</a>
			</div>
<?php
}
function interact_groupselector ($selected) {
	$one_panel=$two_panel="panel panel-success flex-item";
	if ($selected=="small") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="large") {$two_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="interact_group_small.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Small</h4>
					</div>
				</a>
				<a href="interact_group_large.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Large</h4>
					</div>
				</a>
			</div>
<?php
}
function interact_group_smallselector ($selected) {
	$one_panel=$two_panel="panel panel-success flex-item";
	if ($selected=="synch") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="asynch") {$two_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="interact_group_small_synch.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Synchronous</h4>
					</div>
				</a>
				<a href="interact_group_small_asynch.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Asynchronous</h4>
					</div>
				</a>
			</div>
<?php
}

function cocreateselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-success flex-item";
	if ($selected=="multiple") {$one_panel="panel panel-warning flex-item";}
	if ($selected=="everyone") {$two_panel="panel panel-warning flex-item";}
	if ($selected=="individual") {$three_panel="panel panel-warning flex-item";}
?>
				<div class="flex-container">
				<a href="cocreate_multiple.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Multiple Authors</h4>
					</div>
				</a>
				<a href="cocreate_everyone.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Sharing information from everyone</h4>
					</div>
				</a>
				<a href="cocreate_individual.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Curate individual works</h4>
					</div>
				</a>
			</div>
<?php
}

?>
