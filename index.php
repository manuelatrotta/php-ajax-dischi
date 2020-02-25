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
     <header>
       <div class="container">
        <img class="logo" src="dist/img/logo.png" alt="logo spotify">
     </header>
     <main>
       <section class="selection_album">
        <?php foreach ($database as $album) { ?>
         <div class="album">
           <img class="poster" src="<?php echo $album["poster"]; ?>" alt="">
           <h2><?php echo $album["title"]; ?></h2>
           <h4><?php echo $album["author"]; ?></h4>
           <p><?php echo $album["year"]; ?></p>
         </div>
        <?php  } ?>

       </section>

     </main>

   </body>
 </html>
