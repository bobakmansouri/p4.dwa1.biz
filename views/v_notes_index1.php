
		        <div id='notebooks'></div>
				<?php if($notebooks): ?>
				<strong>Notebooks </strong><BR><BR>
				 	<!-- Show posts and display a link to users profile -->
				<?php foreach($notebooks as $notebook): ?>

				<div id='notes'><strong><a class="nav-link" href='/notebooks/index/<?=$notebook['notebook_id']?>'><?=$notebook['name']?></a></strong><BR>

				</div><br><br>
				

				<?php endforeach; ?>
				
				<?php else: ?>
						There are no notes from you. Create a Note.
				<?php endif; ?> 
		 
