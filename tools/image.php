		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='image';
			$title='Images';
			$text='Present images directly on the module page';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to add images as either standalone image or as embedded in a content item.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can add images onto module pages so primarily a "push" tool.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Images are a "push" tool to display on the module page. However, all users can add images into fourm posts';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. Images are a "push" tool to display on the module page. However, all users can add images into fourm posts';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Images cannot be worked on together. They must be saved on the computer and then uploaded, or linked as a URL.';
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
