		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='glossary';
			$title='Glossary';
			$text='Use for learning activities that gather resources or present information.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to set up with the default settings, but has many other options to tailor its use.';
			// Information Transfer
			$styleIT='success';
			$textIT='Use a glossary to define terms or present information in categories.';
			// Assess Learning
			$styleAL='danger';
			$textAL='Glossaries in Blackboard are a "push" tool to present information.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='Glossaries in Blackboard are a "push" tool to present information';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='Glossaries in Blackboard are a "push" tool to present information';
			// Blooms
			$styleB='danger';
			$textB='None. Glossaries are an information transfer tool not a learning activity.';

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
