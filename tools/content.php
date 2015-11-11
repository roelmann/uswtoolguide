		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='content';
			$title='Content Item';
			$text='Refers to Items on the module page in Blackboard - generally the text and images etc that appear on the face of the module page.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Create the content using the HTML editor, adding multimedia if needed.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can create the content, so this is definitely a "push" tool.';
			// Assess Learning
			$styleAL='danger';
			$textAL='No. Its a distribution tool. Although it can be used to communicate information about assessments which are then collected through a different tool.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. Embed or link to interactive widgets.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. Use to give a task. Student files can be collected through forums or assignments.';
			// Blooms
			$styleB='danger';
			$textB='None. This is not a learning activity, but information transfer.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Use content items to engage students or provide information about other resources by adding material directly onto the face of the module webpage, rather than as files which need to be downloaded to open.</p><p>For more information and support see the <a href='http://teach.southwales.ac.uk/blackboard/building/'>Building your Content pages on Teach</a> and the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContent.jsp?course_id=_101667_1&content_id=_1024777_1'>Enhancing Learning Through Technology organisation on Blackboard</a></p>";

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
