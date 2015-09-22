		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='folder';
			$title='Folder';
			$text='Content folders and subfolders set up a hierarchy to group related material';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Content folders can be added from the Build Content tab and used to organise content';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can create folders so definitely a "push" tool.';
			// Assess Learning
			$styleAL='danger';
			$textAL='No. Folders are a content structure for organising content, they dont actually give the content or enable assessment';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Folders are a content structure for organising content, they dont actually give the content or enable interaction';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Folders are a content structure for organising content, they dont actually give the content or allow co-creation';
			// Blooms
			$styleB='danger';
			$textB='No. Folders are a content structure for organising content, they are not a learning activity.';

			// Additional info
			$additional="additional info about <b>".$title."</b>.<br />formatted as <a href='http://bbc.co.uk'>html</a>";

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
