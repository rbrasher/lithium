<?php //print_r($user);?>

<h1><?php echo $user->id;?></h1>
<h5><?php echo $user->username;?></h5>
<p><?php echo $user->password;?></p>


<p><?= $this->html->link('View all Users', '/users', array('class' => 'btn')) ?></p>
<p><?= $this->html->link('Delete User', '/users/delete/' . $user->id, array('class' => 'btn')) ?></p>
<p><?= $this->html->link('Edit User', '/users/edit/' . $user->id, array('class' => 'btn')) ?></p>