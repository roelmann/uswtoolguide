		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='assignments';
			$title='Assignments';
			$text='Use to collect submissions, assess and provide feedback on assignments.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to set up - any assessment needs careful planning though. Online submission and offline assignments can be created.';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. Although contextual content can be added to the assignment brief.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Set due dates and grades. Collect assignments, assess and grade work and return feedback.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Limited. Assignment brief given out, submissions collected, grades and feedback returned - no substantive dialogue takes place through assignment tools themselves.
';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. Assignments can be submitted in groups in Blackboard, although careful planning of the assignment activity is required.';
			// Blooms
			$styleB='success';
			$textB='6/6 Can do all 6 with some planning and creative learning design.';

			// Additional info
			$additional="<h3>".$title."</h3>
		<p>Digital technologies are a valuable way of supporting and enhancing how assessment and feedback are delivered. The <a href='http://teach.southwales.ac.uk/assessment/'>pages on TEACH</a> contain guides to the different tools available at USW as well as information about the benefits of technology enhanced learning (and the different tools and approaches contained within this). You will also find materials from our Online Assessment and Feedback workshop on the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContent.jsp?course_id=_101667_1&content_id=_1044599_1'>Enhancing Learning Through Technology organisation</a> in Blackboard. </p>
		<p>Note: As well as Blackboard's own Assignment tool, we also support TurnItIn - see the separate tool guide. And assessments can also be carried out using quiz tools, graded forum discussions, blogs or wikis.</p>";
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
