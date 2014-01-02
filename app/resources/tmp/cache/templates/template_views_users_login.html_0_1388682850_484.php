<div class="container">
    <?php if($noauth): ?>
    <h4 class="alert alert-error">Login Failed</h4>
    <?php endif; ?>
    <?php echo $this->form->create(); ?>

    <?php echo $this->form->field('username', array('type' => 'text', 'class' => 'text-input')); ?>
    <?php echo $this->form->field('password', array('type' => 'password', 'class' => 'text-input')); ?>

    <?php echo $this->form->submit('Login', array('class' => 'btn btn-large btn-primary')); ?>

    <?php echo $this->form->end(); ?>
</div>