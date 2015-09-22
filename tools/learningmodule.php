		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='learningmodule';
			$title='Learning Module';
			$text='Create a series of related pages and chapters to organise materials';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. A series of pages can be created just using the main editor, adding multi-media if required';
			// Information Transfer
			$styleIT='success';
			$textIT='A way to present information to students in a "book" style format.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Use to present the task, then collect student files through forum discussions or assessments.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. Link to external webpages or embed interactive widgets within the pages of the learning module.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Learning modules are primrily used to present information, although they could contain links to external collaborative activities.';
			// Blooms
			$styleB='danger';
			$textB='None. This is information transfer and not a learning activity.';

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
