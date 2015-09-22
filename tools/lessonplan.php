		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='lessonplan';
			$title='Lesson Plan';
			$text='Use to present lesson profiles, objectives and materials.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='warning';
			$textEU='Takes some time and planning to set up properly.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. This tool is about passing information to the students about the structure of the module.';
			// Assess Learning
			$styleAL='danger';
			$textAL='No. This is a "push" tool for information and would not be best suited for information about a particular assessment.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. This is a "push" tool to provide information. There are no opportunities for interaction.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. This is a "push" tool to provide information. There are no opportunities for collaboration.';
			// Blooms
			$styleB='danger';
			$textB='None. This is an information trasnfer tool, not a learning activity.';

			// Additional info
			$additional="additional info about <b>".$title."</b>.<br />formatted as <a href='http://bbc.co.uk'>html</a>";

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
