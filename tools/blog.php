		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='blog';
			$title='Blog';
			$text='Enables personal writing, reflective or journal activities.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to set up using built in Blackboard tools.';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Use as an information page. Tutor can create their own blog to share information with students.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Although not designed primarily as an assessment tool, blogs are versatile and assessable activities can be planned and designed to use their features.';
			// Communication & Interaction
			$styleCI='warning';
			$textCI='Maybe. Blogs are not ideally suited for discussions, but are ideal for reflective writing and can allow short comments in response.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. Blogs are primarily for personal writing, although they can have comments enabled for other users to respond in a limited manner.';
			// Blooms
			$styleB='success';
			$textB='5/6 understand, apply, analyse, evaluate, create';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>A Blog is a collaborative tool that allows Students to post their personal reflection about the Course or discuss and analyse Course-related materials. You can find out more about Blackboard's Blog tools on our <a href='http://teach.southwales.ac.uk/blackboard/communicating_online/#blogwiki'>Communicating Online pages on TEACH</a></p>";

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
