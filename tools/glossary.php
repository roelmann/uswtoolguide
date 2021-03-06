		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='glossary';
			$title='Glossary';
			$text='Use for presenting resources and information that can be categorised.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to set up with the default settings, but has many other options to tailor its use.';
			// Information Transfer
			$styleIT='success';
			$textIT='Use a glossary to define terms or present information in categories.';
			// Assess Learning
			$styleAL='danger';
			$textAL="Glossaries in Blackboard are a 'push' tool to present information.";
			// Communication & Interaction
			$styleCI='danger';
			$textCI="Glossaries in Blackboard are a 'push' tool to present information.";
			// Co-Creation of Content
			$styleCC='danger';
			$textCC="Glossaries in Blackboard are a 'push' tool to present information.";
			// Blooms
			$styleB='danger';
			$textB='None. Glossaries in Blackboard are an information transfer tool not a learning activity.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>You can discover more about using Glossaries in Blackboard from the <a href='http://teach.southwales.ac.uk/blackboard/glossary/'>TEACH pages</a>.</p>";

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
