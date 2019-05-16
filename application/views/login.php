<html>
    <head>
<!--        <link rel="stylesheet" type="text/css" href="<?php //echo base_url(); ?>assets/css/style.css">-->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>

<body>
<center>
    <?php $action ="userslist/userdetails" ?>
<div class="card" style="width:40%;">
<article class="card-body">
<a href="<?php echo site_url()."/login/signup" ?>" class="float-right btn btn-outline-primary">Sign up</a>
<h4 class="card-title mb-4 mt-1">Sign in</h4>
  <form method="post" action="<?php echo site_url()."/".$action ?>">
    <div class="form-group">
    	<label>Your email</label>
        <input name="" class="form-control" placeholder="Email" type="email" value="dfg@gmail.com">
    </div> <!-- form-group// -->   
    <div class="form-group">
        <?php if(empty($sign)): ?>
    	<a class="float-right" href="#">Forgot?</a>
        <?php endif;?>
    	<label>Your password</label>
        <input class="form-control" placeholder="******" type="password" value="pass">
    </div> <!-- form-group// --> 
    <div class="form-group">    
    </div> <!-- form-group// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">   <?php if(empty($sign)): echo "Login"; else:echo "Sign Up"; endif; ?>  </button>
    </div> <!-- form-group// -->   
                                                            
</form>
</article>
</div> <!-- card.// -->
</center>
</body>
</html>