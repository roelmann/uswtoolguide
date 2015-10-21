		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='announce';
			$title='Announcements';
			$text='Announcements can be used to send out messages from tutors to students.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU="Easy. It's just like a standard forum and is already set up in your module";
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
			<p>Announcements are a good way to inform students of events and notices relating to your module. They can be used as reminders of assignments or general notices.</p>
			<p>You can find information about Announcements in the <a href='http://teach.southwales.ac.uk/blackboard/building/'>Building your Module pages on TEACH</a> and on the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContent.jsp?course_id=_101667_1&content_id=_1071477_1'>Enhancing Learning Through Technology</a> organisation in Blackboard.</p>";

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
