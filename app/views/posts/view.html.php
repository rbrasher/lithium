
<h1><?= $post->title ?></h1>
<p><?= $post->body ?></p>

<p><?= $this->html->link('View all Posts', '/posts', array('class' => 'btn')) ?></p>
<p><?= $this->html->link('Delete Post', '/posts/delete/' . $post->id, array('class' => 'btn')) ?></p>
<p><?= $this->html->link('Edit Post', '/posts/edit/' . $post->id, array('class' => 'btn')) ?></p>
