		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='announce';
			$title='Announcements';
			$text='Announcements can be used to send out messages from tutors to students.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU="Easy. It's just like a standard forum already set up in your module";
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. include course updates, encouragement, timely links, etc.';
			// Assess Learning
			$styleAL='danger';
			$textAL='No. Announcements are limited in that students cannot post back or start new topics.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Announcements are limited in that students cannot post back or start new topics. They are a "push" tool.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Announcements are limited in that students cannot post back or start new topics. They are a "push" tool.';
			// Blooms
			$styleB='danger';
			$textB='None. This is not a learning activity, but information transfer.';
			
			// Additional info
			$additional="<h3>Announcements</h3>
<p>New Announcements appear directly below the repositionable bar and can be dragged to new positions to modify the order.</p>
<h4>Announcement Information</h4>
<p>Subject is a required field and appears as the Announcement title. Type the body of the Announcement in the Message box, which can contain formatted text, attached files, images, multimedia and links. Files added from a local drive are uploaded automatically to Course Files, which provides file storage for a single Course. If your school licenses content management, the files are uploaded to the Content Collection. Announcements can be saved as Reusable Objects in the Content Collection by selecting the check box at the bottom of the Message box and choosing the Content Collection folder in which to store the Announcement.</p>
<h4>Options</h4>
<p>When Duration is set to Not Date Restricted, the Announcement is visible to Students until deleted or until date restrictions are implemented.<br />
When Duration is set to Date Restricted, the Announcement is set to start and stop on specific dates and times. Select the Display After and Display Until check boxes to enable the date and time selections. Use the pop-up Date Selection Calendar and Time Selection Menu to select dates and times.<br />
Selecting the check box for Override User Notification Settings sends an email message to all users regardless of the notification settings they have selected.</p>
<h4>Course Link</h4>
<p>A Course Link is a shortcut to an area, a tool or an item. The link appears in the Announcement only when the area, tool or item is available. If the item is unavailable, the link does not appear in the Announcement. If a Content Item is deleted, the Course Link is removed from the Announcement but the Announcement itself remains.</h4>";

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
