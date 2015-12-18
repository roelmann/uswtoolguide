		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='learningmodule';
			$title='Learning Module';
			$text='Create a series of related pages and chapters to organise materials.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. A series of pages can be created just using the main editor, adding multi-media if required.';
			// Information Transfer
			$styleIT='success';
			$textIT="A way to present information to students in a 'book' style format.";
			// Assess Learning
			$styleAL='danger';
			$textAL='No. Its a distribution tool. Although it can be used to communicate information about assessments which are then collected through a different tool.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. You can link to external webpages or embed interactive widgets within the pages of the learning module.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Learning modules are primarily used to present information, although they could contain links to external collaborative activities.';
			// Blooms
			$styleB='danger';
			$textB='None. This is information transfer and not a learning activity.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Use learning modules to organise a series of pages, within the current page, to engage students or provide information about other resources, rather than as files which need to be downloaded to open, or folders which open separately.</p><p>For more information and support about managing your content see the <a href='http://teach.southwales.ac.uk/blackboard/building/'>Building your Content pages on Teach</a> and the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContent.jsp?course_id=_101667_1&content_id=_1024777_1'>Enhancing Learning Through Technology organisation on Blackboard</a></p>";

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
