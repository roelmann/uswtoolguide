		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='peermark';
			$title='PeerMark from TurnItIn';
			$text='Enables students to provide feedback on each others work.';
			$software='TII';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to set up - any assessment needs careful planning though. Online submission and offline assignments can be created.';
			// Information Transfer
			$styleIT='danger';
			$textIT='No. Although contextual content can be added to the assignment brief.';
			// Assess Learning
			$styleAL='success';
			$textAL='Yes. Set due dates and grades, collect assignments, assess and grade work and return feedback. Also enables students to feedback on peer submissions.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Limited - although students can give feedback to peers, this is not primarily intended as a communication and interaction tool.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='Providing feedback does not constitute co-creation of content.';
			// Blooms
			$styleB='success';
			$textB='6/6 Can do all 6 with some planning and creative learning design.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Digital technologies are a valuable way of supporting and enhancing how assessment and feedback are delivered. The <a href='http://teach.southwales.ac.uk/assessment/'>pages on TEACH</a> contain guides to the different tools available at USW as well as information about the benefits of technology enhanced learning (and the different tools and approaches contained within this). You will also find materials from our Online Assessment and Feedback workshop on the <a href='https://unilearn.southwales.ac.uk/webapps/blackboard/content/listContent.jsp?course_id=_101667_1&content_id=_1044599_1'>ELTT organisation in Blackboard</a>.</p>
		<p>Information about PeerMark itself can be found on the <a href='http://teach.southwales.ac.uk/assessment/PeerMark/'>Assessment pages on TEACH</a>.</p>";

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
