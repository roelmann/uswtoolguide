		<div class="row clearfix flex-container">
			<?php
			//Tool name
			$name='portfolio';
			$title='Portfolios';
			$text='Enables users to collect and publish a portfolio of resources.';
			$software='Blackboard';

			// Ease of Use
			$styleEU='success';
			$textEU='Easy to set up links to user portfolio home page, either as a content item or a menu link.';
			// Information Transfer
			$styleIT='warning';
			$textIT='Portfolios are for individual students to gather their collections of evidence. They are not designed for sending information to students, although it is possible for a tutor to have their own portfolio to publish information if required.';
			// Assess Learning
			$styleAL='success';
			$textAL='Blackboard portfolios can be submitted directly within the Blackboard Assignment tool.';
			// Communication & Interaction
			$styleCI='danger';
			$textCI='Portfolios are not designed as a two-way communication and interaction tool. They are a gathering of evidence by an individual.';
			// Co-Creation of Content
			$styleCC='warning';
			$textCC='Portfolios are designed as an individual tool. However, a portfolio could include items created by other people so that a single portfolio could contain co-created content.';
			// Blooms
			$styleB='success';
			$textB='5/6 understand, apply, analyse, evaluate, create';

			// Additional info
			$additional="<h3>".$title."</h3>
			<p>Portfolios are a means to collect, organise and publish pieces of work over time. They may have a general purpose or be used to showcase achievement.<br>At USW we have the BlackBoard Personal Portfolios tool enabled for users. This allows users to create a collection of ‘artifacts’ which can then be organised into one or more portfolio collections. A snapshot of the portfolio can then be shared with other users, or external contacts, at any time.<br>Portfolios are user based, not module or course specific. However, links to a user's portfolio homepage can be added to a module and users can set up separate portfolios for different purposes, modules, assignments, etc.</p>
			<p>You can find out more about Blackboard Portfolios on the <a href='http://teach.southwales.ac.uk/blackboard/portfolios/'>Portfolios TEACH page</a>.</p>";

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
