
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" integrity="sha256-/PJBs6QWvXijOFIX04kZpLb6ZtSQckdOIavLWKKOgXU=" crossorigin="anonymous"></script>
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
       </div>
    </div>
         <script id="entry-template" type="text/x-handlebars-template">
          <div class="album">
            <img class="poster" src="{{{poster}}}" alt="">
            <h4 class="title">{{title}}</h4>
            <h5>{{author}}</h5>
            <small>{{year}}</small>
          </div>
      </script>
     </main>
    <!--/main-->
    <script src="dist/app.js" charset="utf-8"></script>
   </body>
 </html>
