<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Roller platform, Easy Create Coin network, Easy Create Token.">
    <meta name="author" content="A VIET MEDIA">
    <meta name="generator" content="Khoa Vo">
    <title><?php echo config_item("site_name");?></title>

    <link rel="stylesheet" href="<?php echo resource_url("themify/themify-icons.css");?>">
    
   
    
    
    <script src="<?php echo resource_url("js/apps.js");?>"></script>
    <script src="<?php echo resource_url("bootstrap-notify.js");?>"></script>
    <script src="<?php echo resource_url("bootstrap-toggle.js");?>"></script>
   
    <script src="<?php echo template_url("js/apps.js");?>"></script>
    <link rel="stylesheet" href="<?php echo resource_url("bootstrap-toggle.css");?>">
    <link rel="stylesheet" href="<?php echo template_url("style/bootstrap.css");?>">
    <link rel="stylesheet" href="<?php echo template_url("style/apps.css");?>">
  </head>
    <body>

  <header class="sticky-top">
      <nav class="navbar navbar-expand-lg sticky-top fixed-top navbar-light bg-light">
        <a class="navbar-brand" href="#">Roller Apps</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo store_url("home.html");?>" target="brown_1">Tranh chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mới nhất</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Resource
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      
  </header>
<div class="">
  <div class="panel-left p-2 bg-primary">
    <div class="ml-menu"><i class="ti-menu"></i></div>
    <div class="ml-menu-c">
      <ul>

         

        <li>
          <a href="<?php echo store_url("apps.html");?>" target="brown_1"><i class="ti-desktop"></i></a>
        </li>



         <li>
          <a href="<?php echo profile_url();?>"><i class="ti-receipt"></i></a>
        </li>

        


        <li>
          <a href="<?php echo profile_url();?>"><i class="ti-support"></i></a>
        </li>



       


        <li>
          <a href="<?php echo profile_url();?>"><i class="ti-user"></i></a>
        </li>

        <li>
          <a href="<?php echo profile_url();?>"><i class="ti-settings"></i></a>
        </li>

      </ul>
    </div>
  </div>
  <div class="panel-right">
      <main role="main">
        
         <?php echo $flash;?>
         <?php echo $content;?>
        
      </main>
  </div>
</div>
 
    <footer class="bg-light border-top text-black text-center">
        <div class="container-fluid">
          
        </div>
    </footer>

    <style type="text/css">
    iframe{
      height: 100%;
      width: 100%;
      border:0;
    }
    body{
      overflow: hidden;
    }
      .panel-left{
        width: 80px;
        position: fixed;
        height: 100%;
        top: 0;
        box-shadow: 0 10px 0 0 #ccc;
       
      }

      .panel-right, header{
        margin-left: 80px;
        display: block;
      }
    </style>
    <script type="text/javascript">
      jQuery(document).ready(function(){
        var height = $(window).height() - $("header").height();
        $("main").append('<iframe src="<?php echo store_url("home.html");?>" id="brown_'+$("main").length+'" name="brown_'+$("main").length+'" style="height:'+height+'px;"></iframe>');
      });
    </script>
    </body>
</html>