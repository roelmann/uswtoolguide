		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='modulepage';
			$title='Modular Page';
			$text='Specialised content pages for "modules" or "blocks" of predefined content.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Some text';
			// Information Transfer
			$styleIT='success';
			$textIT='Some text';
			// Assess Learning
			$styleAL='warning';
			$textAL='Some text';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='Some text';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Some text';
			// Blooms
			$styleB='danger';
			$textB='Some text';

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
