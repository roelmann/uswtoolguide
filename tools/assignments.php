		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='assignments';
			$title='Assignments';
			$text='Use to collect submissions, assess and provide feedback on assignments.';
			$software='Blackboard, TurnItIn';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to set up on the systems - any assessment needs careful planning though. Online submission and offline assignments can be created.';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. Although contextual content can be added to the assignment brief.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Set due dates and grades. Collect assignments, assess and grade work and return feedback.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Limited. Assignment brief given out, submissions collected, grades and feedback returned - no substantive dialogue takes place through assignment tools themselves.
';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. Assignments can be submitted in groups in Blackboard (not TurnItIn), although careful planning of the assignment activity is required.';
			// Blooms
			$styleB='success';
			$textB='6/6 Can do all 6 with some planning and creative learning design.';

			// Additional info
			$additional="
		<h3>Assignments</h3>
		Assignments are a form of assessment that adds a column to the Grade Centre. Use the Grade Centre to assign grades and give feedback to each student.<br>
		<h4>Assignment Information</h4><p>Enter a <strong>Name</strong> for the assignment. The name is the title text that appears in the content area where an assignment is added. Use a descriptive name to help users identify the assignment.</p><p>Choose a colour for the title text of the assignment. Be sure to select a colour that provides enough contrast with the background of the content area so users can easily read the text.</p><p>Enter <strong>Points Possible</strong> for the assignment. After students complete and submit an assignment, you enter a score in the Grade Centre. A grade is calculated based on the score and the points possible.</p><p>Use the date fields to enter a <strong>Due Date</strong>.</p><p>Enter <strong>Instructions</strong> that may be necessary to complete the assignment.</p><h4>Associating Rubrics</h4><p>Associated rubrics are visible in the <strong>Grading</strong> section.</p><p>To associate a rubric, point to <strong>Add Rubric</strong> and choose one of the options.<ul><li><strong>Select Rubric</strong> associates a rubric that has already been created in the <strong>Rubrics</strong> area of <strong>Course Tools</strong>.</li><li><strong>Create New Rubric</strong> opens a window to allow immediate creation of a new associated rubric.</li><li><strong>Create From Existing</strong> uses a previously created rubric as a template to create a new associated rubric.</li></ul></p><p>When associating a points-based rubric, the option to use the rubric's points value as the <strong>Points Possible</strong> is available after clicking <strong>Submit</strong> on the rubric creation or selection page.</p><h4>Managing Associated Rubrics</h4><p>Under an associated rubric's <strong>Name</strong>, manage associated rubrics using the icons to <strong>Remove Rubric Association</strong>, <strong>View Rubric</strong>, or <strong>Edit Rubric</strong>.</p><ul><li><strong>Remove Rubric Association</strong> severs the connection to the rubric, but does not delete the rubric itself. If the rubric was used for grading, removing the association also removes those evaluations and the attempts need to be regraded.</li><li><strong>View Rubric</strong> opens a preview that cannot be edited, with a link to view associated items and print the rubric.</li><li><strong>Edit Rubric</strong> opens the associated rubric to allow for immediate editing. If the rubric was used for grading, it cannot be edited.</li><li>For the <strong>Type</strong>, rubrics can be designated as <strong>Used for Grading</strong> or <strong>Used for Secondary Evaluation</strong>. If multiple rubrics are associated, only one can be the primary grading rubric.</li><li><strong>Show Rubric to Students</strong> offers four options for rubric visibility.</li><ul><li><strong>No</strong> does not allow students to view the rubric at any time.</li><li><strong>Yes (With Rubric Scores)</strong> allows students to view the rubric when the item is made available, including possible point or percentage values.</li><li><strong>Yes (Without Rubric Scores)</strong> allows students to view the rubric when the item is made available, but does not include the possible point or percentage values.</li><li><strong>After Grading</strong> allows students to view the rubric only after grading on their submission is completed.</li></ul></ul><h4>Assignment Files</h4><p>Often assignments are made up of files that are distributed to students, completed or edited by students, and then submitted for a grade. Assignment files can be any digital file uploaded from your computer or from the Content Collection. Use the <strong>Browse</strong> functions to locate the files.</p><p>Enter a name for the file in the <strong>Name of Link to File</strong> text box. This name is the link that opens the attached assignment file. If the text box is left blank, the file name is used as the link.</p><p>Currently attached files can be removed from an assignment by selecting them and clicking <strong>Do not attach</strong>. Removing the file does not delete the file from the Content Collection. </p><h4>Assignment Availability</h4><p>To make an assignment unavailable, select <strong>No</strong>.</p><h4>Tracking</h4><p>To turn on tracking statistics for an assignment, select <strong>Yes</strong> for <strong>Track Number of Views</strong>. Tracking statistics records the number of times an assignment is viewed, when it is viewed, and by whom.</p><h4>Date and Time Restrictions</h4><p>You can set assignments to display on a specific date and time and to stop displaying on a specific date and time. Display restrictions do not affect content availability, only the appearance of an assignment. </p><h4>Individual and Group Assignments</h4><p>You can assign assignments to each student or as collaborative work to groups. When using groups, it is possible to give the assignment to select groups or to all groups.</p><p>Before giving an assignment to groups, make sure that the groups that will be given the assignment are set up correctly. Users that are not in a selected group will not receive the assignment. All users that should participate in an assignment should be assigned to a group. If a user is in multiple groups that are given an assignment, an attempt is recorded for that user every time one of the groups submits the assignment.</p><h4>Grading Assignments</h4><p>Grades for assignments are entered in the corresponding column and row in the Grade Centre or from the <strong>Grade Details</strong> page.</p><h3>Grading Assignments From the Grade Details Page</h3><p>From the <strong>Grade Details</strong> page, click <strong>View Attempt</strong> to examine the submission. Enter the grade for the submission in the text box located in the header row, followed by <strong>out of X points</strong>.</p><p>Use the <strong>Feedback</strong> text box to enter any comments about the submission.</p></div>";
			// Display panels
			toolname($name,$title,$text,$software,$additional);
			toolpanel('Ease of Use',$styleEU,$textEU);
			toolpanel('Information Transfer',$styleIT,$textIT);
			toolpanel('Assess Learning',$styleAL,$textAL);
			toolpanel('Communication & Interaction',$styleCI,$textCI);
			toolpanel('Co-Create Content',$styleCC,$textCC);
			toolpanel('Blooms',$styleB,$textB);
			?>

		</div><!-- Row -->
