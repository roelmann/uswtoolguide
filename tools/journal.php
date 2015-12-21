		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='journal';
			$title='Journals';
			$text='Journals are a self-reflective tool that allows Students to post personal reflections.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to set up using built in Blackboard tools';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. Journals are a personal reflective writing tool and not primarily intended for passing information.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Reflective writing in a journal can be submitted and assessed';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Journals are intended as a form of personal reflective writing. They are not primarily intended as a communication and interaction tool.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Journals are intended as a form of personal reflective writing. They are not designed as a collaborative tool.';
			// Blooms
			$styleB='success';
			$textB='5/6 <br />Understand, Apply, Analyse, Evaluate, Create';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>You can find out more about setting up and using Blackbaord Journals from our <a href='http://teach.southwales.ac.uk/blackboard/journals/'>TEACH pages</a>.</p>";

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
