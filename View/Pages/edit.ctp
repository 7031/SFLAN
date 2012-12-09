<h1>Edit Page</h1>
<br>
<?php
echo $this->Form->create('Page', array('action' => 'edit'));
echo $this->Form->input('title', array('class' => 'span12', 'placeholder' => 'Title', 'label' => false));
echo $this->Form->input('body', array('class' => 'span12', 'rows' => '15', 'placeholder' => 'Content', 'label' => false));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->button('Save Page', array('type' => 'submit', 'class' => 'btn btn-primary'));
?>