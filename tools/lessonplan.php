		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='lessonplan';
			$title='Lesson Plan';
			$text='Content container (similar to a folder) designed to let students view the lesson content alongside instructional objectives.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='warning';
			$textEU='Not difficult but requires some preparation and planning of what it will contain and how to layout.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can create lesson plans so definitely a "push" tool.';
			// Assess Learning
			$styleAL='danger';
			$textAL='No. Lesson are simply storage containers for organising content (that may include assessments).';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Lesson are simply storage containers for organising content (that may include interactive elements).';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Lesson are simply storage containers for organising content.';
			// Blooms
			$styleB='danger';
			$textB='None. This is information transfer and not a learning activity.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>The Lesson Plan feature enables you to create a structured unit plan with distinct and customizable sections that provide a means of documenting information such as description, learning level, delivery instructions, and so on. Lesson Plans also include content designed for an individual unit using any type of content or tool enabled in the Course. Full guides coming soon. If you are interested in using this tool please <a href='http://teach.southwales.ac.uk/help-support/'>contact the TEL team</a> for help. </p>";

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
