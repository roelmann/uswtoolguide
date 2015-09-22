		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='video';
			$title='Video';
			$text='Embed videos directly on the module page, or anywhere in content created';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to add videos as either standalone videos or as embedded in a content item.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can add videos onto module pages so primarily a "push" tool.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Videos are a "push" tool to display on the module page. However, all users can add videos into fourm posts';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. Videos are a "push" tool to display on the module page. However, all users can add videos into fourm posts';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Videos cannot be worked on together. They must be saved on the computer and then uploaded, or linked as a URL.';
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
