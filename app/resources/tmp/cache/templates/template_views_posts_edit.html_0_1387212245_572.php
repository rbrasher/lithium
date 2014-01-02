<a href="/posts/">Return to Index</a>
<?php if($saved): ?>
<h4 class="alert alert-success">Data saved successfully!</h4>
<?php endif; ?>
<h1>New Post</h1>
<?php echo $this->form->create(); ?>
<?php echo "<fieldset>";?>
<?php echo $this->form->field('title', array('type' => 'text', 'class' => 'text-input', 'value' => $post->title)); ?>
<?php echo $this->form->field('body', array('type' => 'textarea', 'class' => 'text-input', 'value' => $post->body)); ?>
<?php echo "</fieldset>";?>
<?php echo $this->form->submit('Edit Post', array('class' => 'btn-primary')); ?>
<?php echo $this->form->end(); ?>
