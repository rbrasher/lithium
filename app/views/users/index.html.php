<h1>All Users</h1>

<ul>
<?php foreach($users as $user) { ?>
    <li><?= $this->html->link($user->username, '/users/view/' . $user->id)?></li>
<?php } ?>
</ul>