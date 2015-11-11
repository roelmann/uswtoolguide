		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='chat';
			$title='Chat (text based)';
			$text='Hold real-time text based chat discussions with the class';
			$software='Collaborate';

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
			$additional="<h3>Chat</h3>
			<p>UniLearn does not include a specific Chat tool. However, the webconferencing tool Collaborate can be used to facilitate a chat discussion which may be text based or audio/video depending on the requirements of the session being run.</p>
			<p>You can find more information about using <a href='http://teach.southwales.ac.uk/collaborate'>Collaborate on the Teach channel</a>.</p>";

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
