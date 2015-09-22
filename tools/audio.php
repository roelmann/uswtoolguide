		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='audio';
			$title='Audio';
			$text='Embed audio directly on the module page';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to add a pre-recorded audio file which is already stored on your computer';
			// Information Transfer
			$styleIT='success';
			$textIT='Yes. Only tutors can upload audio files to modules, so this is definitely a "push" tool. Good practice to also add a transcript.';
			// Assess Learning
			$styleAL='warning';
			$textAL='Maybe - can be used in the same way as files or content to give information about a task which can then be collected through forums or assignments.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='No. Its a distribution tool. No option for interaction or 2-way communication.';
			// Co-Creation of Content
			$styleCC='danger';
			$textCC='No. Its a distribution tool. No option for interaction or 2-way communication.';
			// Blooms
			$styleB='danger';
			$textB='None. This is an information transfer tool rather than a learning activity.';

			// Additional info
			$additional="<h3>Embedded Audio</h3>
			<p>Select an audio file to play on the page. If Autostart and Loop are both set to Yes, the audio file will begin playing when users open the page and will continue to play until they stop it or navigate away from the page. Include a transcript for those that cannot hear the audio file.<br>
		Audio files come in a variety of formats and will spawn a compatible player based on the user's computer system. Audio files have one of the following extensions: .aiff, .mp3, .midi, .mp, .wav, or .wma.</p>
		<h4>Audio Options</h4>
		<p>Select <strong>AutoStart</strong> to begin playing the file as soon as the link is clicked or allow the user to start the file using the controls. Select to <strong>Loop</strong> the file so it keeps playing over and over or play the file once. The Controls can appear full-sized or the controls can appear smaller, like a thumbnail, by selecting <strong>Mini</strong>.</p>
		<h4>Item Availability</h4>
		<p>Select <strong>No</strong> to restrict users from listening to the audio file. This will make the audio file unavailable from this location. It will not affect the availability of the audio file if it can be accessed another way, such as through the Content Collection or in another folder. For example, if an audio file is added to a folder from Course Files and made unavailable, the audio file would not appear in that folder. However, the audio file could still be displayed in a different folder if there was another link to it that was available. </p>
		<h4>Tracking</h4>
		<p>To turn on Tracking Statistics for the audio file, select <strong>Yes</strong> for Track Number of Views. Tracking Statistics will record the number of times that the audio file is opened, when it is opened and by whom.</p>
		<h4>Date and Time Restrictions</h4>
		<p>Files can be set to appear on a specific date and time and to hide on a specific date and time. Date and time restrictions do not affect content availability, only the appearance of the content in the folder.</p>";

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
