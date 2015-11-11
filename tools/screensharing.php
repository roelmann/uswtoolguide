		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='screensharing';
			$title='Screen Sharing<br /><b>REVIEW - IF we are going for separate tools in this list rather than functions, then this should not be here - it would come down as Collaborate through the selector</b>';
			$text='Share your desktop and applications to demonstrate via web-conferene tools';
			$software='Collaborate';

			// Ease of Use
			$styleEU='warning';
			$textEU='Once you are in Collaborate its easy, but you need to have your web-conferencing session set up first.
';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Share desktop, applications and use for demonstrations over the web.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Screen sharing can be set up so your students can share their screens for others to see, which would enable some formative assessment if planned carefully.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. If activities are planned in conjunction with web-cam or text chat.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. If activities are planned in conjunction with web-cam or text chat.';
			// Blooms
			$styleB='warning';
			$textB='5/6 Understand, Apply, Analyse, Evaluate, Create. Most useful in combination with the chat or webcam tools';
			
			// Additional info
			$additional="additional info about <b>".$title."</b>.<br />formatted as <a href='http://bbc.co.uk'>html</a>";

			// Display panels
			if(!$printing){
				toolname($name,$title,$text,$software,$additional);
			}
			else {
				toolnamewhenprinting($name,$title,$text,$software,$additional);
			}
			toolpanel('Ease of Use',$styleEU,$textEU);
			toolpanel('Information Transfer',$styleIT,$textIT);
			toolpanel('Assess Learning',$styleAL,$textAL);
			toolpanel('Communication & Interaction',$styleCI,$textCI);
			toolpanel('Co-Create Content',$styleCC,$textCC);
			toolpanel('Blooms',$styleB,$textB);
			?>

		</div><!-- Row -->
