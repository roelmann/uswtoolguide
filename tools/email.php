		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='email';
			$title='Emails';
			$text='Can be used for sending and receiving information outside the VLE itself or using the Blackboard email tools.';
			$software='Outlook/Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Emails are easy to send and receive through the university system and are familiar to the vast majority of users.';
			// Information Transfer
			$styleIT='success';
			$textIT='Emails can be used to send information to individuals or groups of students, through the body of the email or as an attachment.';
			// Assess Learning
			$styleAL='danger';
			$textAL='Emails are not an assessed form of communication and assessed work should normally be submitted through teh VLE tools rather than sent by email.';
			// Communication & Interaction
			$styleCI='success';
			$textCI='Emails are a two way form of communication between any users.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='Although multiple individuals can contribute to an email thread, this is not content in the VLE - for discussion threads within the VLE look at the discussion forum tools.';
			// Blooms
			$styleB='danger';
			$textB='Emails are not recommended as a learning activity - there are more appropriate tools within the VLE itself.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>You can find more about sending emails from within your Blackboard module from the <a href='http://teach.southwales.ac.uk/blackboard/communicating_online/#Email'>TEACH pages on Communicating Online</a>.</p>";

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
