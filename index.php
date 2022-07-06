 
 

 <form action="insert_user.php" method="post">
     <label for="nom">
         <span>Nom</span>
         <input type="text" name="nom">
     </label>

     <label for="prenom">
         <span>Prenom</span>
         <input type="text" name="prenom">
     </label>

     <label for="email">
         <span>Email</span>
         <input type="text" name="email">
     </label>

     <label for="envoy">
         <input type="submit" name="submit" value="envoyer">
     </label>


 </form>

 <?php include('./include/footer.php');
 include('./include/header.php');
 require('./include/pdo.php');
