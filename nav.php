<nav class="navbar-light" style="background-color:white";>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Skate</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
		<li><a href="lanc.php">Lançamentos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
		  aria-expanded="false">Categoria<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="categoria.php?cat=Cruiser">Cruiser</a></li>
             <li><a href="categoria.php?cat=Eco">Eco</a></li>
            <li><a href="categoria.php?cat=Downhill">Downhill</a></li>
            <li><a href="categoria.php?cast=Freestyle">Freestyle</a></li>
            <li><a href="categoria.php?cat=Street">Street</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisar">
        </div>
        <button type="submit" class="btn btn-default">pesquisa</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Contato</a></li>
		
		
   <?php if (empty($_SESSION['ID']))  { ?>
        <li><a href="formlogan.php"><span class="glyphicon glyphicon-log-in"> Logon</a></li>
        <?php }  else { 
		$consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where cd_usuario ='$_SESSION['ID']'");
       $exibe_usuario = $concsulta_usuario->fetch(PDO ::FETCH_ASSOC);
?>
         <li><a href="#"><span class="glyphicon glyphicon-user"> <?php echo $exibe_usuario['nm_usuario'];?></a></li>
            <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair</a></li>
<?php } ?>
         </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

