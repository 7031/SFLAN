<h1>Register</h1>
<div class="row">
	<div class="span4 center">
		<?php
		echo $this->Form->create('User', array('action' => 'register', 'label' => false));
		echo $this->Form->input('username', array('class' => 'input-block-level', 'placeholder' => 'Username', 'label' => false));
		echo $this->Form->input('password', array('class' => 'input-block-level', 'placeholder' => 'Password', 'label' => false));
		echo $this->Form->input('password_confirm', array('type' => 'password', 'class' => 'input-block-level', 'placeholder' => 'Confirm password', 'label' => false));
		echo $this->Form->submit('Register', array('class' => 'btn btn-primary'));
		echo $this->Form->end();
		?> 
	</div>
	<div class="span8">
		<p style="padding-top: 4px;">
			Pick something nice here.
		</p>
		<p style="padding-top: 10px;">
			Choose a password. Try and make it good. It's encrypted using SHA256, so it's pretty secure.
		</p>
		<p style="padding-top: 10px;">
			And again, for confirmation.
		</p>
	</div>
</div>