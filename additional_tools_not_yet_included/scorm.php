		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='scorm';
			$title='SCORM - REVIEW:No-one is currently using this, should we include it or not?';
			$text='Use to present content, media and interactive activities from external sources.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='danger';
			$textEU='Can be tricky to create, although 3rd party materials can be available';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Great for presenting multimedia content and animations.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Allows grading and can pass grades back into Blackboard. Can embed questions and interactive challenges.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. this is an individual activity, not a group one.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. this is an individual activity, not a group one.';
			// Blooms
			$styleB='success';
			$textB='6/6 - but depends on the actual SCORM activity used. Can do all 6 with some planning and creative learning design.';

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
