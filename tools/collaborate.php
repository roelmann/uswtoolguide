		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='collaborate';
			$title='Collaborate';
			$text='Hold real-time audio/video (web-cam) based chat discussions with the class.';
			$software='Collaborate';

			// Ease of Use
			$styleEU='success';
			$textEU='Quite easy to set up. Requires some planning to manage and moderate. TEACH pages available for support.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Collaborate for interaction/collaborate sessions. Use for invited speakers. High speed message volume. Risks of non-interaction.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Chats are versatile and can be used in formative assessment activities e.g.Polling activity in Collaborate.';
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
			$additional="<h3>".$title."</h3>
			<p>http://its.southwales.ac.uk/documents/download/38/  http://teach.southwales.ac.uk/collaborate/</p>";

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
