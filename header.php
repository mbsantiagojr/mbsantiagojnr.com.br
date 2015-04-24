<?

	//ob_start();
	//header("Cache-Control: no-cache, must-revalidate");

	$cont = $_GET['cont'];
	$cont.=".php";
	 if(eregi("http|www|ftp|.dat|.txt|.gif|wget|../", $cont)){
	  echo "Página não encontrada";
	  exit;
	 }
	if (!file_exists($cont)) $cont = "home.php";


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <!--
  /*************************************************************/
   * Data           : 01/2015                       		 
   * Layout         : MB Santiago Jr.  
   * Development    : MB Santiago Jr.  
   * Módulo         : Site / Sistema   	    	    		 
   *************************************************************/
  -->


  <meta charset="UTF-8" />
  <meta name="dc.title" content="MB Santiago Jr" />
  <meta name="dc.creator" content="MB Santiago Jr" /> 
  <meta name="language" content="pt-br">
  <meta name="description" content="Portifólio">
  <meta name="keywords" content="Portifólio + Design + HTML + CSS + CV">
  <meta name="robots" content="index,follow">
  <meta name="author" content="MB Santiago Jr">
  <meta name="contact" content="mbsantiagojr@gmail.com">
  <meta name="viewport" content="width=device-width,initial-scale=1">


  <link rel="shortcut icon" href="favicon.ico" />
  <title>MB Santiago Jr | HTML, CSS, JS, Flash Y Otras Cositas Más...</title>
  
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
  
  <link href="css/font-face.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" />    
  <link href="css/reset.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" />
  <link href="css/estilos.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" />
  <link href="css/media-queries.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" />
  <link href="css/animate.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel="stylesheet" />
  

</head>


<body>

<header class="transicao">

  <section id="cabecalho" class="cabecalho">

    <nav class="menu-principal" role="navigation">

      <a id="botaohome" href=""><h1 class="transicao">home</h1></a>

      <ul>
        <li><a class="transicao" href="">pessoal</a></li>
        <li><a class="transicao" href="">profissional</a></li>
        <li><a class="transicao" href="">portifolio</a></li>
        <li><a class="transicao" href="">contato</a></li>
      </ul>

    </nav>   

  </section>


</header>





