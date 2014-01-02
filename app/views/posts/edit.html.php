<a href="/posts/">Return to Index</a>
<?php if($saved): ?>
<h4 class="alert alert-success">Data saved successfully!</h4>
<?php endif; ?>
<h1>New Post</h1>
<?= $this->form->create() ?>
<?php echo "<fieldset>";?>
<?= $this->form->field('title', array('type' => 'text', 'class' => 'text-input', 'value' => $post->title)) ?>
<?= $this->form->field('body', array('type' => 'textarea', 'class' => 'text-input', 'value' => $post->body)) ?>
<?php echo "</fieldset>";?>
<?= $this->form->submit('Edit Post', array('class' => 'btn-primary')) ?>
<?= $this->form->end() ?>
