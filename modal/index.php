<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <title>Utilizando Pus.js</title>
       <script src="push.js/push.min.js"> </script>

   <script>
       
   Push.create("Tiene caso y/o Casos por Resolver", {
           body: "Este es un mensaje nuevo",
           icon: "images/logo.jpg",
           timeout: 4000,
       });

          </script>

  </head>
  <body>
    <img id="estirada" style="position: absolute; top: 0; witdth: 100% height: 100% src="images/logo.jpg" />
     

     </body>  
     </html>