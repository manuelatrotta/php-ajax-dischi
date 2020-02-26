<?php
include __DIR__ . '/partials/server.php';

//var_dump($database);
//
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="dist/app.css">
     <title>php-ajax-dischi</title>
   </head>
   <body>
    <!--header-->
     <header>
       <div class="container">
        <img class="logo" src="dist/img/logo.png" alt="logo spotify">
      </div>
     </header>
     <!--/header-->
     <!--main-->
     <main>
    <div class="container">
       <div class="selection_album">
        <?php foreach ($database as $album) { ?>
         <div class="album">
           <img class="poster" src="<?php echo $album["poster"]; ?>" alt="">
           <h4 class="title"><?php echo $album["title"]; ?></h4>
           <h5><?php echo $album["author"]; ?></h5>
           <small><?php echo $album["year"]; ?></small>
         </div>
        <?php  } ?>
      </div>
    </div>
     </main>
    <!--/main-->
   </body>
 </html>
