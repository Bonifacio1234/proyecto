
<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div class="container">
   <div style="height:350px;">
      <body background="fondo.jpg" >
   </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
           <h2><font color="purple">Bienvenido</font>, <?php echo $user; ?>!</h2>
           <a  style="position: absolute;top: -450%; left: -180%;" href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Salir</a>
        </div>
    </div>
</div>
</body>
</html>