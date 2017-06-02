
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Templaye</title>

    <style>

  		header{
  			position:relative;
  			margin:auto;
  			text-align:center;
  			padding:5px;
  		}

  		nav{
  			position:relative;
  			margin:auto;
  			width:100%;
  			height:auto;
  			background:black;
  		}

  		nav ul{
  			position:relative;
  			margin:auto;
  			width:50%;
  			text-align: center;
  		}

  		nav ul li{
  			display:inline-block;
  			width:24%;
  			line-height: 50px;
  			list-style: none;
        color:white;
  		}

  		nav ul li a{
  			color:white;
  			text-decoration: none;
  		}

  		section{
  			position:relative;
  			padding:20px;

  			text-align: center;

  		}

      footer{
        text-align: center;
      }

      footer img{
        margin: auto ;
        width: 10%;
        height: 10%;

      }

  	</style>

  </head>
  <body>

    <header>
      <h1>LOGOTIPO</h1>
    </header>

    <?php
      include 'modules/navegacion.php'
     ?>

    <section>
      <?php
      $mvc = new MvcController();
      $mvc -> enlacesPaginasController();
       ?>
    </section>

    

  </body>
</html>
