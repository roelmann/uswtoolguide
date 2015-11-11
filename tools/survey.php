		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='survey';
			$title='Survey';
			$text='Use surveys to gather data from students on any topic.';
			$software='Blackboard, QMP';

			// Ease of Use
			$styleEU='warning';
			$textEU='Maybe. Takes time to set up well. Configure the general settings and then add questions';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. The survey tool is not for distributing information.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Use to have students self-assess their understanding before and after.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Enables one-way communication from student to teacher.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. This is an individual activity, not a group one.';
			// Blooms
			$styleB='success';
			$textB='6/6 Can do all 6 with some planning and creative learning design.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Full guides coming soon. If you are interested in using this tool please <a href='http://teach.southwales.ac.uk/help-support'>contact the TEL team</a> for help.</p>";

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
