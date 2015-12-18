		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='portfolio';
			$title='Portfolios';
			$text='Enables users to collect and publish a portfolio of resources.';
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
			$styleCI='warning';
			$textCI='...';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='...';
			// Blooms
			$styleB='success';
			$textB='...';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>...</p>";

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
