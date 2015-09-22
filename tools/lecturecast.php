		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='lecturecast';
			$title='Lecture Casting';
			$text='Recording and playback of lectures, events and seminars.';
			$software='Panopto';

			// Ease of Use
			$styleEU='warning';
			$textEU='Not difficult but requires some preparation and planning. Requires some initial setup and additional equipment (microphone and camera)';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Provide lecture or seminar recordings for a variety of purposes.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Use to present the task, then collect student files through forum discussions or assessments.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. This tool is for recording and playback of sessions, it is not an interactive communication tool.';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='Yes. Students and other users can contribute to the session being recorded.';
			// Blooms
			$styleB='success';
			$textB='5/6 understand, apply, analyse, evaluate, create';

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
