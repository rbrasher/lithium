<div class="container">
    <?php if($noauth): ?>
    <h4 class="alert alert-error">Login Failed</h4>
    <?php endif; ?>
    <?= $this->form->create();?>

    <?= $this->form->field('username', array('type' => 'text', 'class' => 'text-input'));?>
    <?= $this->form->field('password', array('type' => 'password', 'class' => 'text-input')); ?>

    <?= $this->form->submit('Login', array('class' => 'btn btn-large btn-primary')); ?>

    <?= $this->form->end(); ?>
</div>