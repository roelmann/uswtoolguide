		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='quiz';
			$title='Quizzes, Surveys and Tests';
			$text='Use to assess learning, whether formative or summative.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='danger';
			$textEU='No. Takes time to set up well. Configure the general settings and then add questions. Particular attention should be paid to writing good quality questions.';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. Quizzes are aimed at assessment not as a distribution channel.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Quizzes can be timed and secure and has a variety of question types which can be used for assessing.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Tip - use forums instead.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Tip - use forums or wikis instead.';
			// Blooms
			$styleB='success';
			$textB='6/6 Can do all 6 with some planning and creative learning design.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>For information on using Tests please see the  <a href='http://teach.southwales.ac.uk/assessment/'>Quiz pages on Teach</a>.</p><p>Note: QuentionMark Perception (QMP) can also be used for carrying our quizes and tests, while Blackboard Surveys can be used for non-assessed quizes such as self-study reflection or feedback - see those separate tools for more information.</p>";

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
