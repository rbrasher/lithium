<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Application &gt; <?php echo $this->title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->html->style(array('bootstrap', 'bootstrap-theme', 'styles')); ?>
    <?php echo $this->html->script(array('jquery.min', 'bootstrap.min'));?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">&sect;</a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php //if($this->_config['logged_in']) { ?>
                    <!--<li><a href="/users/logout">Logout</a></li>-->
                <?php //} else { ?>
                    <li><a href="/users/login">Login</a></li>
                <?php //} ?>
            </ul>
            
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/posts">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/users">View All</a></li>
                        <li><a href="/users/add">Add User</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


    <div class="content">
        <?php echo $this->content(); ?>
    </div>

    <hr>

    <div class="footer">
        <p>&copy; Union Of RAD <?php echo date('Y');?></p>
    </div>

</div>
</body>
</html>