
<h1><?php echo $h($post->title); ?></h1>
<p><?php echo $h($post->body); ?></p>

<p><?php echo $this->html->link('View all Posts', '/posts', array('class' => 'btn')); ?></p>
<p><?php echo $this->html->link('Delete Post', '/posts/delete/' . $post->id, array('class' => 'btn')); ?></p>
<p><?php echo $this->html->link('Edit Post', '/posts/edit/' . $post->id, array('class' => 'btn')); ?></p>
