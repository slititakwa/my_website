
<html lang="en"> <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
        <link rel="stylesheet" href="bootstrap-4.6.0/bootstrap-4.6.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4.6.0/bootstrap-4.6.0-dist/css/bootstrap.css">
           <title>
             <?php bloginfo('title')?></title> 
           <?php wp_head(); ?>
         </head> 

         <body class="body">
              <header class="mainheader" > 
           <h1 id="blog-title" ><?PHP bloginfo('name')?></h1> 
           <h2 id="blog-desc"><?php bloginfo('descrition')?></h2>
         
       

       <div id="slide">
   <figure>
       
       
     
       </figure>
       </div>


  <nav  >
    <div style="display:flex; height: 40px;"> 
      <img style="width: 50px;  height: 40px;" src="<?php echo get_bloginfo('template_directory') ?>/11.png">
      <div style="margin-left:350px">

      <?php wp_nav_menu(); ?>          
      </div>

    </div>
  </nav>
        <img style="width: 100%;  height: 80%;" src="<?php echo get_bloginfo('template_directory') ?>/bb.png">

               </header>
               <div class="maincontent"></div>
                <section class="top-content"></section>



