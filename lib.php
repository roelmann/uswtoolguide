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

function toolnamewhenprinting ($name, $title, $text, $software, $additional) {
?>
		<form class="flex-item row-header flexrowheader" action="detail.php" method="post" >
			<input type="hidden" name="tooltype" value="<?php echo $name;?>" >
			<input type="hidden" name="additional" value="<?php echo $additional;?>" > 

			<div class="panel panel-info flex-item row-header flexrowheader">
				<div class="panel-heading flexpanelheading">
					<h3 class="panel-title"><?php echo $title;?></h3>
					<p class="tool-description"><?php echo $text;?></p>
					<p class="tool-software"><?php echo $software;?></p>
				</div>
			</div>
		</form>

<?php
}

function tooldetail ($name, $additional) {
	$filename='tools/'.$name.'.php';
?>
	<div class="main-container">

		<div class="main-content detail">
			<?php require ('includes/header.php'); ?>

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

function tooldetailprintlist ($name, $additional) {
//	$filename='tools/'.$name.'.php';
    $filename = $name;
?>
	<div class="main-container">

		<div class="main-content detail">
			<p><br /></p>
			<?php
				$printing=1;
				require ($filename);
			?>

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

/* Functions for the Tool Selector Decision Tree
 * ------------------------------------------------------------------------------
 */
function firstselector ($selected) {
	$transferpanel=$assesspanel=$interactpanel=$cocreatepanel="panel panel-warning flex-item";
	$assesspanel="panel panel-brand flex-item";
	if ($selected=="transfer") {$transferpanel="panel panel-success flex-item";}
	if ($selected=="assess") {$assesspanel="panel panel-success flex-item";}
	if ($selected=="interact") {$interactpanel="panel panel-success flex-item";}
	if ($selected=="cocreate") {$cocreatepanel="panel panel-success flex-item";}
?>
            
				<div class="flex-container">
				<a href="communicate.php" class="<?php echo $transferpanel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Communicate Information</h4>
					</div>
				</a>
				<a href="assess.php" class="<?php echo $assesspanel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Assessments</h4>
					</div>
				</a>
				<a href="interact.php" class="<?php echo $interactpanel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Peer/Student/Tutor Interactions</h4>
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

/* Functions for the Peer/Student/Tutor Interactions section of the decision tree
 * ------------------------------------------------------------------------------
 */
function interactselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="one2one") {$one_panel="panel panel-success flex-item";}
	if ($selected=="group") {$two_panel="panel panel-success flex-item";}
	if ($selected=="class") {$three_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="interact_121.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>One-2-One</h4>
					</div>
				</a>
				<a href="interact_group.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Groups</h4>
					</div>
				</a>
				<a href="interact_class.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Whole Class</h4>
					</div>
				</a>
			</div>
<?php
}
function interact_classselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="discuss") {$one_panel="panel panel-success flex-item";}
	if ($selected=="personal") {$two_panel="panel panel-success flex-item";}
	if ($selected=="shared") {$three_panel="panel panel-success flex-item";}

?>
				<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="interact_class_discuss.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Debate and Discuss</h4>
					</div>
				</a>
				<a href="interact_class_personal.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Personal Writing</h4>
					</div>
				</a>
				<a href="interact_class_shared.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Shared, multiple authors</h4>
					</div>
				</a>
			</div>
<?php
}

function interact_class_whenselector ($selected) {
	$one_panel=$two_panel="panel panel-warning flex-item";
	if ($selected=="now") {$one_panel="panel panel-success flex-item";}
	if ($selected=="timed") {$two_panel="panel panel-success flex-item";}

?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="interact_class_discuss_synch.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Here and Now</h4>
					</div>
				</a>
				<a href="interact_class_discuss_asynch.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Over Time</h4>
					</div>
				</a>
			</div>
<?php
}
function interact_groupselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="discuss") {$one_panel="panel panel-success flex-item";}
	if ($selected=="personal") {$two_panel="panel panel-success flex-item";}
	if ($selected=="shared") {$three_panel="panel panel-success flex-item";}

?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="interact_group_discuss.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Debate and Discuss</h4>
					</div>
				</a>
				<a href="interact_group_personal.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Personal Writing</h4>
					</div>
				</a>
				<a href="interact_group_shared.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Shared, multiple authors</h4>
					</div>
				</a>
			</div>
<?php
}

function interact_group_whenselector ($selected) {
	$one_panel=$two_panel="panel panel-warning flex-item";
	if ($selected=="now") {$one_panel="panel panel-success flex-item";}
	if ($selected=="timed") {$two_panel="panel panel-success flex-item";}

?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="interact_group_discuss_synch.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Here and Now</h4>
					</div>
				</a>
				<a href="interact_group_discuss_asynch.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Over Time</h4>
					</div>
				</a>
			</div>
<?php
}

function interact_one2oneselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="now") {$one_panel="panel panel-success flex-item";}
	if ($selected=="timed") {$two_panel="panel panel-success flex-item";}

?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="interact_one2one_synch.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Here and Now</h4>
					</div>
				</a>
				<a href="interact_one2one_asynch.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Over Time</h4>
					</div>
				</a>
			</div>
<?php
}

function interact_one2one_timed_whoselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="peer") {$one_panel="panel panel-success flex-item";}
	if ($selected=="student") {$two_panel="panel panel-success flex-item";}

?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

			<div class="flex-container">
				<a href="interact_one2one_asynch_peer.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Peer-Peer (Anyone)</h4>
					</div>
				</a>
				<a href="interact_one2one_asynch_student.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Student-Tutor</h4>
					</div>
				</a>
			</div>
<?php
}

function interact_one2one_timed_studentselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="communicate") {$one_panel="panel panel-success flex-item";}
	if ($selected=="question") {$two_panel="panel panel-success flex-item";}
	if ($selected=="reflect") {$three_panel="panel panel-success flex-item";}

?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

			<div class="flex-container">
				<a href="interact_one2one_asynch_student_communicate.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Send information</h4>
					</div>
				</a>
				<a href="interact_one2one_asynch_student_question.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Ask Question</h4>
					</div>
				</a>
				<a href="interact_one2one_asynch_student_reflect.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Individual reflections</h4>
					</div>
				</a>

			</div>
<?php
}

/* Functions for the Communicating/Transfer Information section of the decision tree
 * ------------------------------------------------------------------------------
 */
function communicateselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="single") {$one_panel="panel panel-success flex-item";}
	if ($selected=="grouped") {$two_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="communicate_single.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Single item (at a time)</h4>
					</div>
				</a>
				<a href="communicate_groupof.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Organised grouping of items</h4>
					</div>
				</a>
			</div>
<?php
}

function communicate_groupedselector ($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="content") {$one_panel="panel panel-success flex-item";}
	if ($selected=="mixed") {$two_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="communicate_groupof_content.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Collection of content pages</h4>
					</div>
				</a>
				<a href="communicate_groupof_mixed.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Mixed resources/activities</h4>
					</div>
				</a>
			</div>
<?php
}

function communicate_singleselector ($selected) {
	$one_panel=$two_panel=$three_panel=$four_panel=$five_panel="panel panel-warning flex-item";
	if ($selected=="navigation") {$one_panel="panel panel-success flex-item";}
	if ($selected=="hyperlink") {$two_panel="panel panel-success flex-item";}
	if ($selected=="document") {$three_panel="panel panel-success flex-item";}
	if ($selected=="item") {$four_panel="panel panel-success flex-item";}
	if ($selected=="multimedia") {$five_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="communicate_single_navigation.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Through Navigation Menu</h4>
					</div>
				</a>
				<a href="communicate_single_hyperlink.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Hyperlink</h4>
					</div>
				</a>
				<a href="communicate_single_document.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Document or File</h4>
					</div>
				</a>
				<a href="communicate_single_item.php" class="<?php echo $four_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Item on the module page</h4>
					</div>
				</a>
				<a href="communicate_single_multimedia.php" class="<?php echo $five_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Multimedia</h4>
					</div>
				</a>
			</div>
<?php
}

function communicate_single_itemselector($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="page") {$one_panel="panel panel-success flex-item";}
	if ($selected=="book") {$two_panel="panel panel-success flex-item";}
	if ($selected=="content") {$three_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="communicate_single_item_page.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Single blank page</h4>
					</div>
				</a>
				<a href="communicate_single_item_book.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Series of pages</h4>
					</div>
				</a>
				<a href="communicate_single_item_content.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Directly on Module page</h4>
					</div>
				</a>
			</div>
<?php
}

function communicate_single_hyperlinkselector($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="courselink") {$one_panel="panel panel-success flex-item";}
	if ($selected=="weblink") {$two_panel="panel panel-success flex-item";}
	if ($selected=="content") {$three_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="communicate_single_hyperlink_courselink.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Within the module</h4>
					</div>
				</a>
				<a href="communicate_single_hyperlink_weblink.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>An external webpage</h4>
					</div>
				</a>
				<a href="communicate_single_hyperlink_withincontent.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Embedded within page content</h4>
					</div>
				</a>
			</div>
<?php
}

function communicate_single_hyperlink_contentselector($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="page") {$one_panel="panel panel-success flex-item";}
	if ($selected=="book") {$two_panel="panel panel-success flex-item";}
	if ($selected=="content") {$three_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="communicate_single_hyperlink_withcontent_page.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Single blank page</h4>
					</div>
				</a>
				<a href="communicate_single_hyperlink_withcontent_book.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Series of pages</h4>
					</div>
				</a>
				<a href="communicate_single_hyperlink_withcontent_content.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Directly on Module page</h4>
					</div>
				</a>
			</div>
<?php
}

function communicate_single_multimediaselector($selected) {
	$one_panel=$two_panel=$three_panel=$four_panel="panel panel-warning flex-item";
	if ($selected=="audio") {$one_panel="panel panel-success flex-item";}
	if ($selected=="image") {$two_panel="panel panel-success flex-item";}
	if ($selected=="video") {$three_panel="panel panel-success flex-item";}
	if ($selected=="capture") {$three_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

			<div class="flex-container">
				<a href="communicate_single_multimedia_audio.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Audio</h4>
					</div>
				</a>
				<a href="communicate_single_multimedia_image.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Still Image</h4>
					</div>
				</a>
				<a href="communicate_single_multimedia_video.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Pre-recorded Video</h4>
					</div>
				</a>
				<a href="communicate_single_multimedia_capture.php" class="<?php echo $four_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Lecture/Session recording</h4>
					</div>
				</a>
			</div>
<?php
}

function communicate_single_multimedia_imageselector($selected) {
	$one_panel=$two_panel="panel panel-warning flex-item";
	if ($selected=="page") {$one_panel="panel panel-success flex-item";}
	if ($selected=="file") {$two_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="communicate_single_multimedia_image_page.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Embedded on the page</h4>
					</div>
				</a>
				<a href="communicate_single_multimedia_image_file.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Downloadable file</h4>
					</div>
				</a>
			</div>
<?php
}

function communicate_single_multimedia_image_pageselector($selected) {
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="page") {$one_panel="panel panel-success flex-item";}
	if ($selected=="book") {$two_panel="panel panel-success flex-item";}
	if ($selected=="content") {$three_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="communicate_single_multimedia_image_page_page.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Single blank page</h4>
					</div>
				</a>
				<a href="communicate_single_multimedia_image_page_book.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Series of pages</h4>
					</div>
				</a>
				<a href="communicate_single_multimedia_image_page_content.php" class="<?php echo $three_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Directly on Module page</h4>
					</div>
				</a>
			</div>
<?php
}

function communicate_single_multimedia_captureselector($selected) {
	$one_panel=$two_panel="panel panel-warning flex-item";
	if ($selected=="webconference") {$one_panel="panel panel-success flex-item";}
	if ($selected=="lecture") {$two_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="communicate_single_multimedia_capture_webconference.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>A web-conference session</h4>
					</div>
				</a>
				<a href="communicate_single_multimedia_capture_lecture.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>A lecture/presentation</h4>
					</div>
				</a>
			</div>
<?php
}

/* Functions for the CoCreation section of the decision tree
 * ------------------------------------------------------------------------------
 */
function cocreateselector ($selected) {
	$one_panel=$two_panel="panel panel-warning flex-item";
	if ($selected=="single") {$one_panel="panel panel-success flex-item";}
	if ($selected=="discuss") {$two_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="cocreate_single.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Single Document</h4>
					</div>
				</a>
				<a href="cocreate_discussion.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Discussion</h4>
					</div>
				</a>
			</div>
<?php
}

function cocreate_singleselector ($selected) {
	$one_panel=$two_panel="panel panel-warning flex-item";
	if ($selected=="oneauthor") {$one_panel="panel panel-success flex-item";}
	if ($selected=="manyauthors") {$two_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

				<div class="flex-container">
				<a href="cocreate_single_one.php" class="<?php echo $one_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>1 Author, multiple responses</h4>
					</div>
				</a>
				<a href="cocreate_single_many.php" class="<?php echo $two_panel?>">
					<div class="panel-heading flexpanelbody">
						<h4>Many authors</h4>
					</div>
				</a>
			</div>
<?php
}

/* Functions for the Assessment section of the decision tree
 * ------------------------------------------------------------------------------
 */
function assessselector ($selected) {
	$one_panel=$two_panel=$three_panel=$four_panel=$five_panel="panel panel-warning flex-item";
	if ($selected=="test") {$one_panel="panel panel-success flex-item";}
	if ($selected=="offline") {$two_panel="panel panel-success flex-item";}
	if ($selected=="understand") {$three_panel="panel panel-success flex-item";}
	if ($selected=="self") {$four_panel="panel panel-success flex-item";}
	if ($selected=="group") {$four_panel="panel panel-success flex-item";}

?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

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
	$one_panel=$two_panel="panel panel-warning flex-item";
	if ($selected=="quick") {$one_panel="panel panel-success flex-item";}
	if ($selected=="depth") {$two_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

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
	$one_panel=$two_panel="panel panel-warning flex-item";
	if ($selected=="collaborative") {$one_panel="panel panel-success flex-item";}
	if ($selected=="discussion") {$two_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

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
	$one_panel=$two_panel="panel panel-warning flex-item";
	if ($selected=="synch") {$one_panel="panel panel-success flex-item";}
	if ($selected=="asynch") {$two_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

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
	$one_panel=$two_panel=$three_panel="panel panel-warning flex-item";
	if ($selected=="repeat") {$one_panel="panel panel-success flex-item";}
	if ($selected=="peer") {$two_panel="panel panel-success flex-item";}
	if ($selected=="reflect") {$three_panel="panel panel-success flex-item";}
?>
			<div class = "flexarrow"><span class = "fa fa-3x fa-arrow-down">&nbsp;</span></div>

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

/* Functions for the Assessment section of the decision tree
 * ------------------------------------------------------------------------------
 */
?>
