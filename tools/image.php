		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='image';
			$title='Images';
			$text='Present images directly on the module page - but can also be used in Blogs/Wikis/Forum posts';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to add images as either standalone image or as embedded in a content item.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can add images onto module pages so primarily a "push" tool.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Images can be added into fourm posts, blogs, wikis or any other area where students can create content.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. Images can be added into fourm posts, blogs, wikis or any other area where students can create content.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. Images can be added into fourm posts, blogs, wikis or any other area where students can create content.';
			// Blooms
			$styleB='warning';
			$textB='5/6 <br />Understand, Apply, Analyse, Evaluate, Create.<br />When used by students in blogs/wikis/forums';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Consider the copyright implications of any images used - if you are unsure, then it is best to stick to Creative Commons images and ensure you comply with the appropriate licence (e.g. attribution)</p><p>You can find more information about using images on the <a href='http://teach.southwales.ac.uk/media/images/'>Media pages of Teach</a> and in the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContentEditable.jsp?content_id=_1066163_1&course_id=_101667_1'>Enhancing Learning Through Technology organisation on Blackboard</a>.</p>";

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
