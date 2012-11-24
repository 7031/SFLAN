<div class="row">
	<div class="span4 offset4">
		<h2>Login</h2>
			<?php echo $this->Form->create('User'); ?>
			<?php 
			if (!isset($error)) {
				$id = '';
			} else {
				$id = 'inputError';
			}
			echo $this->Form->input('username', array('class' => 'input-block-level', 'id' => $id, 'placeholder' => 'Username', 'label' => false));
			echo $this->Form->input('password', array('class' => 'input-block-level', 'id' => $id, 'placeholder' => 'Password', 'label' => false));
			echo $this->Form->submit('Login', array('class' => 'btn btn-primary btn-block'));
			echo $this->Form->end();
			?>
	</div>
</div>