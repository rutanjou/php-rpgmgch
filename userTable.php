<?php
$users = require 'users.php';
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Tableau d'utilisateurs</title>
   </head>
   <body>
     <h1>Mes utilisateurs</h1>
     <!-- <?= var_dump($users) ?> -->
     <table>
       <thead>
         <tr>
           <td>Id</td>
           <td>Email</td>
           <td>Créé le</td>
         </tr>
       </thead>
       <tbody>
         <!-- tr = table row = ligne du tableau -->
         <?php
         foreach ($users as $key => $user){
           ?>
           <tr>
             <td>
               <?= $user->getId(); ?>
             </td>
             <td>
               <?= $user->getEmail(); ?>
             </td>
             <td>
               <?= $user->getCreatedAt(); ?>
             </td>
           </tr>
        <?php
          }
         ?>
       </tbody>
     </table>
   </body>
 </html>
