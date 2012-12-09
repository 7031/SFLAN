<h1>Edit Game</h1>
<br>
<?php
echo $this->Form->create('Game');
echo $this->Form->input('name', array('class' => 'span12', 'placeholder' => 'Name', 'label' => false));
echo $this->Form->input('description', array('class' => 'span12', 'rows' => '15', 'placeholder' => 'Description', 'label' => false));
?>
<div class="row">
	<div class="span4">
		<?php echo $this->Form->input('filesize', array('class' => 'span4', 'placeholder' => 'Filesize', 'label' => false)); ?>
	</div>
	<div class="span4">
		<?php echo $this->Form->input('download', array('class' => 'span4', 'placeholder' => 'Download URL', 'label' => false)); ?>
	</div>
	<div class="span4">
		<?php echo $this->Form->input('screenshot', array('class' => 'span4', 'placeholder' => 'Screenshot URL', 'label' => false)); ?>
	</div>
</div>
<p><strong>System requirements:</strong></p>
<div class="row">
	<div class="span3">
		<?php echo $this->Form->input('cpu', array('class' => 'span3', 'placeholder' => 'CPU', 'label' => false)); ?>
	</div>
	<div class="span3">
		<?php echo $this->Form->input('ram', array('class' => 'span3', 'placeholder' => 'RAM', 'label' => false)); ?>
	</div>
	<div class="span3">
		<?php echo $this->Form->input('graphics', array('class' => 'span3', 'placeholder' => 'Graphics', 'label' => false)); ?>
	</div>
	<div class="span3">
		<?php echo $this->Form->input('os', array('class' => 'span3', 'placeholder' => 'OS', 'label' => false)); ?>
	</div>
</div>
<?
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->button('Save Page', array('type' => 'submit', 'class' => 'btn btn-primary'));
?>