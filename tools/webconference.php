		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='webconference';
			$title='Web-Conference';
			$text='Hold real-time audio/video (web-cam) based chat discussions with the class.';
			$software='Collaborate, Skype';

			// Ease of Use
			$styleEU='warning';
			$textEU='Quite easy to set up. Requires some planning to manage and moderate';
			// Information Transfer
			$styleIT='warning';
			$textIT='Maybe. Use for invited speakers. High speed message volume. Risks of non-interaction';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Chats are versatile and can be used in formative assessment activities if planned well.
';
			// Communication & Interaction
			$styleCI='success';
			$textCI='Yes. Hold debates, small group review sessions, drop-in and Q&A sessions';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='Yes. Students can collaborate and explore topics, discuss them and write together.';
			// Blooms
			$styleB='success';
			$textB='5/6 understand, apply, analyse, evaluate, create';

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
