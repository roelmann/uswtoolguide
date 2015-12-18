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
			$textIT='Yes. Use Collaborate for interaction/collaboration sessions and for invited speakers. Consider the management of the potential high volume of messaging and the risk of some users not interacting.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Online discussions are versatile and can be used in formative assessment activities e.g. Polling activities in Collaborate.';
			// Communication & Interaction
			$styleCI='success';
			$textCI='Yes. Hold debates, small group review sessions, drop-in and Q&A sessions.';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='Yes. Students can collaborate and explore topics, discuss them and write together, or use the built in whiteboard features to share ideas.';
			// Blooms
			$styleB='success';
			$textB='5/6 understand, apply, analyse, evaluate, create';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Collaborate is an online virtual classroom/meeting space which allows users to connect via audio, see each other via webcams, use a chat tool, collaborate on documents and view presentations, as well as other features. You can find more about <a href='http://teach.southwales.ac.uk/collaborate/'>Collaborate on the TEACH channel</a>.</p>";

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
