<div class="container"> 
    <?php if ($register): ?>
    <h4 class="alert alert-success">User <?php echo $h($data['username']); ?> created</h4>
    <?php endif; ?>
    <?php echo $this->form->create($user); ?>
    <?php echo "<fieldset>"; ?>
    <?php echo $this->form->field('username', array('class' => 'text-input')); ?>
    <?php echo $this->form->field('password', array('type' => 'password', 'class' => 'text-input')); ?>
    <?php echo "</fieldset>";?>
    <?php echo $this->form->submit('Add', array('class' => 'btn btn-primary btn-large')); ?>
    <?php echo $this->form->end(); ?>
</div>
