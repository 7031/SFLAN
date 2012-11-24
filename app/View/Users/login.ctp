<div class="row">
	<div class="span4">
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
	<div class="span8">
		<h2>Not registered?</h2>
		<p>Register today, and get some awesome benefits:</p>
		<ul>
			<li>We'll have your email address!</li>
			<li>Possibly some random useless permissions you didn't want / need.</li>
			<li>Access to the fabled delete button!</li>
			<li>And yes, we encrypt your passwords. We can't view them, and neither can anyone else.</li>
		</ul>
		<?php echo $this->Html->link('<strong>Go and register</strong>', array('controller' => 'users', 'action' => 'register'), array('escape' => false)); ?>
	</div>
</div>