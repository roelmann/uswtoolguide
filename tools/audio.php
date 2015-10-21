		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='audio';
			$title='Audio';
			$text='Embed audio directly on the module page';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to add a pre-recorded audio file which is already stored on your computer';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can upload audio files to modules, so this is definitely a "push" tool. Good practice to also add a transcript.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe - can be used in the same way as files or content to give information about a task which can then be collected through forums or assignments.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Its a distribution tool. No option for interaction or 2-way communication.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Its a distribution tool. No option for interaction or 2-way communication.';
			// Blooms
			$styleB='danger';
			$textB='None. This is an information transfer tool rather than a learning activity.';

			// Additional info
			$additional="<h3>Embedded Audio</h3>
			<p>Audio can be used to create content which is more engaging and memorable than text alone. The <a href='http://teach.southwales.ac.uk/media/audio'>TEACH pages on enhancing your content</a> will help you identify where to find audio content and give you the skills to create audio content for your modules, along with the related pages on the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContent.jsp?course_id=_101667_1&content_id=_1021159_1'>Enhancing Learning Through Technology organisation on Blackboard</a>.</p>";

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
