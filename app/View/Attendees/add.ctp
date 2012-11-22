<h1>Add Attendee</h1>
<div class="row">
	<div class="span4 center">
		<?php
		echo $this->Form->create('Attendee');
		echo $this->Form->input('name', array('class' => 'span4', 'placeholder' => 'Name', 'label' => false));
		echo $this->Form->input('nickname', array('class' => 'span4', 'placeholder' => 'Nickname', 'label' => false));
		echo $this->Form->input('table', array('class' => 'span4', 'type' => 'select', 'options' => $tables, 'label' => false));
		echo $this->Form->button('Add attendee', array('type' => 'submit', 'class' => 'btn btn-primary'));
		?>
	</div>
	<div class="span8">
		<p style="padding-top: 4px;">
			Name of attendee
		</p>
		<p style="padding-top: 10px;">
			Nickname
		</p>
		<p style="padding-top: 10px;">
			Table number
		</p>
	</div>
</div>
