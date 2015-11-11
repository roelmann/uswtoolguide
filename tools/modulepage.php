		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='modulepage';
			$title='Module Overview';
			$text='Outline of module with aims, learning outcomes, and assessment plan. Use to give basic summary of delivery plan.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Edit dates and additional information to give simple outline of module. ';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only staff can edit information so this is definitely a "push" tool. ';
			// Assess Learning
			$styleAL='danger';
			$textAL='No. This is simply an overview of information. ';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. This is simply an overview of information. ';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='No. This is simply an overview of information. ';
			// Blooms
			$styleB='warning';
			$textB='None. This is simply an overview of information. ';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Module aims, learning outcomes and assessment details are all pulled from the ICIS database. Any errors must be corrected there (see your faculty administrators).  For information on editing the additional information and learning materials overview please see the <a href='http://teach.southwales.ac.uk/blackboard/building/'>Building Content TEACH pages</a>.</p>";

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
