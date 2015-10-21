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
			$additional="<h3>".$title."</h3>
			<p>Folders are a content organisation tool. They allow a defined structure of content to be created, with other resources (items, files, pages, links, etc) being added within the folders.</p><p>For more information on managing folders in your module see the <a href='http://teach.southwales.ac.uk/blackboard/building/'>Building Content pages on Teach</a>.</p>";

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
