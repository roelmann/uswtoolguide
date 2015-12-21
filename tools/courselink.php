		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='courselink';
			$title='Course link';
			$text='Enables links to activities and resources within the module.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy - the Course Link tool provides a drop down list of all the resources and activities within the module to select from and creates the link to that item.';
			// Information Transfer
			$styleIT='success';
			$textIT='Easy. Directs students to specific parts of the module - can be very useful as part of an Announcement for example.';
			// Assess Learning
			$styleAL='danger';
			$textAL='No. Although the link could be to an assessment activity.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Although the link could be to a communication and interaction activity.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Although the link could be to a co-creation activity.';
			// Blooms
			$styleB='danger';
			$textB='None. Although the link could be to an activity which does allow these.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Use Course links to provide links to other resources within your module (compared with URL Weblinks which do not have the drop down to locate items, but can link to resources in other areas of the VLE or web).</p><p>For more information and support see the <a href='http://teach.southwales.ac.uk/blackboard/building/'>Building your Content pages on Teach</a> and the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContent.jsp?course_id=_101667_1&content_id=_1024777_1'>Enhancing Learning Through Technology organisation on Blackboard</a></p>";

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
