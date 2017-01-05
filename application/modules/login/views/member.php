<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Login | Member</title>
</head>
<body>
<?php echo $this->session->flashdata('message');?>
<h1>Halo, this is member page, you're logged in as <?php echo $username; ?></h1> <a href="member/logout">Logout</a>

</body>
</html>