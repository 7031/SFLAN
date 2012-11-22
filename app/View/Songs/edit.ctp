<h1>Edit Song</h1>
<div class="row">
	<div class="span4">
		<?php
		echo $this->Form->create('Song');
		echo $this->Form->input('title', array('class' => 'span4', 'placeholder' => 'Title', 'label' => false));
		echo $this->Form->input('artist', array('class' => 'span4', 'placeholder' => 'Artist', 'label' => false));
		echo $this->Form->input('url', array('class' => 'span4', 'placeholder' => 'YouTube URL', 'label' => false));
		echo $this->Form->button('Save Song', array('type' => 'submit', 'class' => 'btn btn-primary'));
		?>
	</div>
	<div class="span8">
		<p style="padding-top: 4px;">Type the title of the song here. Simples.</p>
		<p style="padding-top: 10px;">The artist name helps too.</p>
		<p style="padding-top: 10px;">The URL for the video on YouTube. Include the http:// please. Otherwise your link won't work.</p>
	</div>
</div>