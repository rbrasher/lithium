<?php
$this->form->config(
        array(
            'templates' => array(
                'error' => '<div class="alert alert-error">{:content}</div>'
            )
        )
);
?>
<?php if($saved): ?>
<h4 class="alert alert-success">Data saved successfully!</h4>
<?php endif; ?>
<h1>New Post</h1>
<?php echo $this->form->create($post); ?>
<?php echo "<fieldset>";?>
<?php echo $this->form->field('title', array('type' => 'text', 'class' => 'text-input')); ?>
<?php echo $this->form->field('body', array('type' => 'textarea', 'class' => 'text-input')); ?>
<?php echo "</fieldset>";?>
<?php echo $this->form->submit('Submit', array('class' => 'btn-primary')); ?>
<?php echo $this->form->end(); ?>
