		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='audienceresponse';
			$title='Audience Reponse';
			$text='Voting systems which allow audience responses within a face-face environment.';
			$software='Collaborate, Voting systems';

			// Ease of Use
			$styleEU='warning';
			$textEU='Not difficult, but can take some thought to set up well to ensure good engagement';
			// Information Transfer
			$styleIT='warning';
			$textIT='Maybe. This is primarily a tool for audience engagement and response, although it can be tied in with presentations or other information transfer tools';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Audience response systems can be used to judge understanding of sessions and discussions.';
			// Communication & Interaction
			$styleCI='success';
			$textCI='Yes. Although communication may be limited according to the responses enabled, it does allow users to interact with the session and the instructor';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Audience responses are not really co-creation, although they may be set up to display charts of responses as part of the presentation being used.';
			// Blooms
			$styleB='success';
			$textB='6/6 Can do all 6 with some planning and creative learning design.';

			// Additional info
			$additional="additional info about <b>".$title."</b>.<br />formatted as <a href='http://bbc.co.uk'>html</a>";

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
