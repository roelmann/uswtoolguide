		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='email';
			$title='Emails';
			$text='Can be used for ...';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='...';
			// Information Transfer
			$styleIT='success';
			$textIT='...';
			// Assess Learning
			$styleAL='warning';
			$textAL='...';
			// Communication & Interaction
			$styleCI='success';
			$textCI='...';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='...';
			// Blooms
			$styleB='success';
			$textB='5/6 <br />Understand, Apply, Analyse, Evaluate, Create';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Emails - additional info</p>";

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
