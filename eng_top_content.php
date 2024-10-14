<?php $siteroot = '/'?>
<?php $page = basename($_SERVER['SCRIPT_NAME'])?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.ico">

  <title>Negociaciones Internacionales Lema</title>
  <link rel="shortcut icon" href="<?php echo $siteroot; ?>img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $siteroot; ?>img/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $siteroot; ?>img/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $siteroot; ?>img/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $siteroot; ?>img/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $siteroot; ?>img/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $siteroot; ?>img/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $siteroot; ?>img/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $siteroot; ?>img/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $siteroot; ?>img/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $siteroot; ?>img/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $siteroot; ?>img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $siteroot; ?>img/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $siteroot; ?>img/favicon-16x16.png">
  <link rel="manifest" href="<?php echo $siteroot; ?>img/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo $siteroot; ?>img/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title>Negociaciones Internacionales Lema</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo $siteroot; ?>css/bootstrap.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo $siteroot; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $siteroot; ?>css/tachyons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $siteroot; ?>css/font-awesome.min.css">

  </head>
<!-- NAVBAR
  ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="content">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="content">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $siteroot; ?>index.php"><img src="<?php echo $siteroot; ?>img/logo_lema.png" alt="" width="120"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $siteroot; ?>english_home.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Industries<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                                        <li><a href="<?php echo $siteroot; ?>includes/eng_asfaltos.php">Asphalt</a></li>

                    <li><a href="<?php echo $siteroot; ?>includes/eng_cuidado_personal.php">Personal care</a></li>
                    <li><a href="<?php echo $siteroot; ?>includes/eng_polimeros.php">Polymers and elastomers</a></li>
                    <li><a href="<?php echo $siteroot; ?>includes/eng_recubrimientos.php">Coatings, inks and paints.</a></li>
                   <!-- <li role="separator" class="divider"></li> 
                     <li class="dropdown-header">Nav header</li> -->
                     <li><a href="<?php echo $siteroot; ?>includes/eng_grasas.php">Greases and lubricants</a></li>
                       <li><a href="<?php echo $siteroot; ?>includes/eng_limpieza.php">Cleaning</a></li>
                        <li><a href="<?php echo $siteroot; ?>includes/eng_oil.php">Oil & Gas</a></li>

                     <li><a href="<?php echo $siteroot; ?>includes/eng_agroquimicos.php">Agrochemicals</a></li>
                     <li><a href="<?php echo $siteroot; ?>includes/eng_plasticos.php">Plastics</a></li>
                     <li><a href="<?php echo $siteroot; ?>includes/eng_tratamiento_de_aguas.php"> Water treatment</a></li>
                     <li><a href="<?php echo $siteroot; ?>includes/eng_varios.php">Various</a></li>

                   </ul>
                 </li>  
                 <li><a href="<?php echo $siteroot; ?>includes/eng_acerca.php">Corporate Information</a></li>
                 <li><a href="<?php echo $siteroot; ?>includes/eng_contactanos.php">Contact</a></li>
                  <li><a href="<?php echo $siteroot; ?>index.php">Spanish version</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                <li style="padding-right: 20px; padding-top: 15px;"><a class="typeform-share button" href="https://contactolema.typeform.com/to/k8aUZv" data-mode="popup" style="display:inline-block;text-decoration:none;background-color:#e91919;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:15px;line-height:37.5px;text-align:center;margin:0;height:37.5px;padding:0px 25px;border-radius:18px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">Contact Us </a> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
</li>
              </ul>
            </div>

          </div>
        </nav>

      </div>
    </div>