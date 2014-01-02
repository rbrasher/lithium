<h1>Blog</h1>
<p><?php echo $this->html->link('Add New Post', '/posts/add', array('class' => 'btn-primary btn-large')); ?></p>

<article>
    <ul>
    <?php foreach($posts as $post) { ?>
        <li><?php echo $this->html->link($post->title, '/posts/view/' . $post->id); ?></li>
    <?php } ?>
    </ul>
</article>

<div class="clearfix"></div>