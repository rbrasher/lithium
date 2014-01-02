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
<?= $this->form->create($post) ?>
<?php echo "<fieldset>";?>
<?= $this->form->field('title', array('type' => 'text', 'class' => 'text-input')) ?>
<?= $this->form->field('body', array('type' => 'textarea', 'class' => 'text-input')) ?>
<?php echo "</fieldset>";?>
<?= $this->form->submit('Submit', array('class' => 'btn-primary')) ?>
<?= $this->form->end() ?>
