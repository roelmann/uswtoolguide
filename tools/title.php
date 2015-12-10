		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='title';
			$title='<i class="fa fa-arrow-right fa-2x" style="float:right;"></i><p style="text-align:right;">What do you want to achieve?  </p><p><br /></p><i class="fa fa-arrow-down fa-2x"></i><p style="text-align:left;">  What do you want to use?</p>';
			$text='';
			$software='';

			// Ease of Use
			$styleEU='';
			$textEU='<h4>Ease of Use</h4>';
			// Information Transfer
			$styleIT='';
			$textIT='<h4>Provide Information</h4>';
			// Assess Learning
			$styleAL='';
			$textAL='<h4>Assessing Learning</h4>';
			// Communication & Interaction
			$styleCI='';
			$textCI='<h4>Communicate and Interact</h4>';
			// Co-Creation of Content
			$styleCC='';
			$textCC='<h4>Co-create Content</h4>';
			// Blooms
			$styleB='';
			$textB='<h4>Blooms Taxonomy</h4>';

			// Additional info
			$additional="";

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
