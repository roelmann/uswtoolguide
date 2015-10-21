		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='video';
			$title='Video';
			$text='Embed videos directly on the module page, or anywhere in content created';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to add videos as either standalone videos or as embedded in a content item.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can add videos onto module pages so primarily a "push" tool.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Videos are a "push" tool to display on the module page. However, all users can add videos into fourm posts, blogs, or assignment submissions';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. Videos are a "push" tool to display on the module page. However, users can work collaboratively to create videos before they are added to the module through blogs or forum posts etc.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. Videos are a "push" tool to display on the module page. However, users can work collaboratively to create videos before they are added to the module through blogs or forum posts etc.';
			// Blooms
			$styleB='danger';
			$textB='None. This is information transfer and not a learning activity.';

			// Additional info
			$additional="<h3>Embedded Video</h3>
			<p>Video can be used to create content which is more engaging and memorable than text alone. The <a href='http://teach.southwales.ac.uk/media/video'>TEACH pages on enhancing your content</a> will help you identify where to find video content and give you the skills to create video content for your modules, along with the related pages on the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContent.jsp?course_id=_101667_1&content_id=_1021159_1'>Enhancing Learning Through Technology organisation on Blackboard</a>.</p>";

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
