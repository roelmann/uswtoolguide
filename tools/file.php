		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='file';
			$title='File';
			$text='Upload a file - e.g. Word, Powerpoint, PDF';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Like an email attachment, but can your document stand on its own? Consider adding a content item or description to explain the file where appropriate.';
			// Information Transfer
			$styleIT='success';
			$textIT="Yes. Only tutors can upload files to modules, so this is definitely a 'push' tool.";
			// Assess Learning
			$styleAL='danger';
			$textAL='No. Its a distribution tool. Although it can be used to communicate information about assessments which are then collected through a different tool.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Its a distribution tool. There is no option for interaction or 2-way communication.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Its a distribution tool. There is no option for interaction or 2-way communication.';
			// Blooms
			$styleB='danger';
			$textB='None. This is not a learning activity, but information transfer.';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Files are used where it is not appropriate to display the content directly on the web page. When planning to use files, consider the format being used to ensure your students can access it easily. eg. pdf files may display better on mobie devices than Word or Powerpoint files, but can't be edited by the student as easily.</p><p>For more information on using files in your module see the <a href='http://teach.southwales.ac.uk/blackboard/files/'>Files pages on Teach</a>.</p>";

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
