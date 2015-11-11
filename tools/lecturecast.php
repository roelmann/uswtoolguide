		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='lecturecast';
			$title='Panopto Lecture Casting';
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
			$textAL='Maybe. Use to present the task, then collect student files through forum discussions or assessments. If set up appropriately, students can also use Panopto to record videos into a folder for review by tutors.';
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
			$additional="<h3>".$title."</h3>
			<p>For further information about Panopto, including step-cy-stpe guides please see the <a href='http://teach.southwales.ac.uk/media/lecture-capture/'>Media pages on Teach</a>.</p><p>Note: other tools such as Collaborate may also be used to record sessions taking place. Please see the individual tools for more information and the Tool Selector for help in determining which tool is most appropriate for your use.</p>";

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
