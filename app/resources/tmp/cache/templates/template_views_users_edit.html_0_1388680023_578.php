<a href="/users/">Return to Users</a>
<?php if($saved): ?>
<h4 class="alert alert-success">Data saved successfully!</h4>
<?php endif; ?>
<h1>Edit User</h1>
<?php echo $this->form->create(); ?>
<?php echo "<fieldset>";?>
<?php echo $this->form->field('username', array('type' => 'text', 'class' => 'text-input', 'value' => $user->username)); ?>
<?php echo $this->form->field('password', array('type' => 'text', 'class' => 'text-input', 'value' => $user->password)); ?>
<?php echo "</fieldset>";?>
<?php echo $this->form->submit('Save', array('class' => 'btn-primary')); ?>
<?php echo $this->form->end(); ?>
