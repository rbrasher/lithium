<div class="container"> 
    <?php if ($register): ?>
    <h4 class="alert alert-success">User <?= $data['username']; ?> created</h4>
    <?php endif; ?>
    <?= $this->form->create($user); ?>
    <?php echo "<fieldset>"; ?>
    <?= $this->form->field('username', array('class' => 'text-input')); ?>
    <?= $this->form->field('password', array('type' => 'password', 'class' => 'text-input')); ?>
    <?php echo "</fieldset>";?>
    <?= $this->form->submit('Add', array('class' => 'btn btn-primary btn-large')); ?>
    <?= $this->form->end(); ?>
</div>
