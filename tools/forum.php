		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='forum';
			$title='Discussion Forum';
			$text='Can be used for many types of learning activities and interactions.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Discussions have usable default settings. A name & description is usually enough.';
			// Information Transfer
			$styleIT='success';
			$textIT='Share resources as links or files. Caution over high message volume and risk of losing info.';
			// Assess Learning
			$styleAL='warning';
			$textAL="Discussions are versatile & allow this with some learning design. They link seemlessly with Blackboard's gradecentre";
			// Communication & Interaction
			$styleCI='success';
			$textCI='Yes. Students communicate with you & peers. They can interact as a class or in groups.';
			// Co-Creation of Content
			$styleCC='success';
			$textCC='Yes. Students can collaborate & explore topics, discuss them & write together.';
			// Blooms
			$styleB='success';
			$textB='5/6 <br />Understand, Apply, Analyse, Evaluate, Create';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Discussion Forums are a powerful and easy to set up tool, allowing communication and interaction within your module. Some thought is needed to ensure best use is made of the forums through good moderation and communication practices.</p><p>You can read more on the <a href='http://teach.southwales.ac.uk/blackboard/communicating_online/#discussion'>Communicating pages On Teach</a> and in the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContentEditable.jsp?content_id=_1044642_1&course_id=_101667_1'>Enhancing Learning Through Technology organisation on Blackboard</a>.</p>";

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
