<?php
include __DIR__ . '/partials/server.php';

//var_dump($database);
//
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <header>
     </header>
     <main>
       <section class="selection_album">
        <?php foreach ($database as $album) { ?>
         <div class="">
           <img src="<?php echo $album["poster"]; ?>" alt="">
           <h2><?php echo $album["title"]; ?></h2>
           <h4><?php echo $album["author"]; ?></h4>
           <p><?php echo $album["year"]; ?></p>
         </div>
        <?php  } ?>

       </section>

     </main>

   </body>
 </html>
