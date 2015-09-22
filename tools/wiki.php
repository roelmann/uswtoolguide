		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='wiki';
			$title='Wiki';
			$text='Enables collaborative content creation.';
			$software='Blackboard, Campus Pack';

			// Ease of Use
			$styleEU='warning';
			$textEU='Can be tricky to set up and get best use from wikis - get some training.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Use as an information page. Tutor can control who is able to edit.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Wikis are versatile and assessable activities can be planned and designed to use their features.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Not suited for discussions, but ideal for brainstorming, planning and collaborative writing.';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='Yes. Students can collaborate and explore topics and write together.';
			// Blooms
			$styleB='success';
			$textB='5/6<ul><li>Understand</li><li>Apply</li><li>Analyse</li><li>Evaluate</li><li>create</li></ul>';

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