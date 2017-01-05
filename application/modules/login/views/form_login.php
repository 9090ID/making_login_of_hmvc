<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Multi Login</title>
     <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
       <link href="<?php echo base_url();?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
       <style type="text/css">
          .transparan2{background:rgba(0,0,0,0.4);}
       </style>

</head>
<body>
<div class="transparan2">
 			<div class="form-box" >
            <div class="header">Sign In As Admin And Member</div>
			<?php echo form_open("login/cek_login"); ?>
			<?php echo $error; ?>
	 		<div class="body bg-gray">
            <div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Username">
	 		</div>          
    		 <div class="form-group">
             <input type="password" name="password" class="form-control" placeholder="Password"/>
             </div>          
             </div>
	 		<button type="submit" class="btn btn-warning bg-olive btn-block"><b style="color:black;font-family:andalus;font-size:20px;">Sign in</b></button>  
	<?php echo form_close(); ?>
	  </div>          
    </div></div><br>
<div class="container">
	<center>
	Copyright &copy; 2017
    Designed by ..............
    </center>
</div>
</body>
</html>


