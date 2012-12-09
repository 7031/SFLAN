<h1>Register</h1>
<div class="row">
	<div class="span4">
		<?php
		echo $this->Form->create('User', array('action' => 'register', 'label' => false));
		echo $this->Form->input('username', array('placeholder' => 'Username', 'label' => false));
		echo $this->Form->input('password', array('placeholder' => 'Password', 'label' => false));
		echo $this->Form->input('password_confirm', array('type' => 'password', 'placeholder' => 'Confirm password', 'label' => false));
		echo $this->Form->submit('Register', array('class' => 'btn btn-primary'));
		echo $this->Form->end();
		?> 
	</div>
</div>
