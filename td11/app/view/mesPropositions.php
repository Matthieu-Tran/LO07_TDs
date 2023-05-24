 <!-- ----- debut de la page cave_acceuil -->
 <?php include 'fragment/fragmentCaveHeader.html'; ?>

 <body>
     <div class="container">
         <?php
            include 'fragment/fragmentCaveMenu.html';
            ?>
     </div>
     <div class="mt-4 p-5 bg-success text-white rounded">
         <ul>
             <li>
                 Mettre le header et le footer directement dans le routeur afin d'éviter de le mettre sur chaque view
             </li>
         </ul>
     </div>
     <p />

     <?php
        include 'fragment/fragmentCaveFooter.html';
        ?>

     <!-- ----- fin de la page cave_acceuil -->

 </body>

 </html>