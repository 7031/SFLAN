<h1>Add Page</h1>
<br>
<?php
echo $this->Form->create('Page');
echo $this->Form->input('title', array('class' => 'span12', 'placeholder' => 'Title', 'label' => false));
echo $this->Form->input('body', array('class' => 'span12', 'rows' => '15', 'placeholder' => 'Content', 'label' => false));
echo $this->Form->button('Save Page', array('type' => 'submit', 'class' => 'btn btn-primary'));
?>