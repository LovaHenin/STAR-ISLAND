<?php      require_once '../config/function.php';
require_once '../inc/header.inc.php';

if (!empty($_POST)){
  
   // verifier si le email est déjà present dans la base 
   $mdp = execute("SELECT * FROM motdepass WHERE id='1'");
        

 //Mot de pass admin=admin=> si necessaire  à changer par l admin => par defaut admin

 $mdp=$mdp->fetch(PDO:: FETCH_ASSOC);
          

            if(password_verify($_POST['password'],$mdp['mdp'])){

                $_SESSION['user']='ADMIN';
                //tab[] tableau indexé
                header('location:../back');
                $_SESSION['user']='ADMIN';
          
                  exit();

            }else{
                $password='Erreur sur le mot de passe';
            }





}










?>
<style>
 
    /*evenement*/
    @media (min-width: 368px) {
        .logo {

            width: 15%;
        }
        .form1{
            position: relative;
           top:350px;
        }

        .footer .right img {
            width: 30%;

        }

    }

    @media (min-width: 1200px) {
        .form1{
           
            top:350px;
        }
        .logo {

            width: 10%;
        }

   
  
</style>
<form class="form1  mt-2 w-75 mx-auto" method="post" enctype="multipart/form-data">

   
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-white"> Mot de passe</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        <small class="text-danger"><?= $password  ?? ""; ?></small>
    </div>


    <button type="submit" class="btn btn-primary">Connecter</button>
</form>



<?php require_once '../inc/footer.inc.php';    ?>
