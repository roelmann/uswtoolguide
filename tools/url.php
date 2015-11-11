		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='url';
			$title='Weblink';
			$text='Link to a webpage or resource - this can be internal within the VLE or external to another page.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy - find the web address (the bit that starts <em>http</em>, copy it and paste it.';
			// Information Transfer
			$styleIT='success';
			$textIT='Very easy way to direct students to information on other websites';
			// Assess Learning
			$styleAL='danger';
			$textAL='Not directly. Could link students to external assesable activities such as portfolios or blogs.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='Not directly. Could link students to external interaction activities such as wikis or forums.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='Not directly. Could link students to external collaborative activities such as wikis';
			// Blooms
			$styleB='warning';
			$textB='Depends on the link provided and what learning activities are available on the external link.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Use URL links to provide links to other resources, either on your module, within other areas of Blackboard/UniLearn, or externally.</p><p>For more information and support see the <a href='http://teach.southwales.ac.uk/blackboard/building/'>Building your Content pages on Teach</a> and the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContent.jsp?course_id=_101667_1&content_id=_1024777_1'>Enhancing Learning Through Technology organisation on Blackboard</a></p>";

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
