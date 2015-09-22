		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='file';
			$title='File';
			$text='Upload a file - e.g. Word, Powerpoint, PDF';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy. Like an email attachment, but can your document stand on its own?';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can upload files to modules, so this is definitely a "push" tool.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe. Use to give a task. Student files can be collected through forums or assignments.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Its a distribution tool. No option for interaction or 2-way communication.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Maybe. Use to give a task. Student files can be collected through forums or assignments.';
			// Blooms
			$styleB='danger';
			$textB='None. This is not a learning activity, but information transfer.';

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