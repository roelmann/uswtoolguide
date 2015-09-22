		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='forum';
			$title='Discussion Forum';
			$text='Can be used for many types of learning activities and interactions.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Discussions have usable default settings. A name & description is usually enough.';
			// Information Transfer
			$styleIT='success';
			$textIT='Share resources as links or files. Caution over high message volume and risk of losing info.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Discussions are versatile & allow this with some learning design.';
			// Communication & Interaction
			$styleCI='success';
			$textCI='Yes. Students communicate with you & peers. They can interact as a class or in groups.';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='Yes. Students can collaborate & explore topics, discuss them & write together.';
			// Blooms
			$styleB='success';
			$textB='5/6 <br />Understand, Apply, Analyse, Evaluate, Create';

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
