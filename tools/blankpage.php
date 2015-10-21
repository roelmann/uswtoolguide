		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='blankpage';
			$title='Blank Page';
			$text='Create a separate blank content page within your module';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Just create the page using the HTML editor, adding multimedia if needed.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can create the pages, so this is definitely a "push" tool.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Use to give a task. Student files can be collected through forums or assignments.';
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
			$additional="<h3>Blank Page</h3>
			<p>Pages make use of the same content as adding content items to your module. However, they allow the content to be organised onto a separate page rather than directly on the module. The page can be accessed via a link in the main module content.</p><p>You can find additional support on the <a href='http://teach.southwales.ac.uk/blackboard/building'>TEACH Building your content pages</a> and on the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContent.jsp?course_id=_101667_1&content_id=_1024777_1'>Enhancing Learning Through Technology organisation in Blackboard</a>.</p>";

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
