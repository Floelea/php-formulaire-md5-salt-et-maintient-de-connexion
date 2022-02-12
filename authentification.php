<?php  

$salt = "calade";
$users = [

  [
      "username"=>"tiffany",
      "password"=>"9a1e58f0e04e24bc00f9f059799bdd50",
  ],
  
  [
      "username"=>"kim",
      "password"=>"629a3904d5da7a4ba0262617308feeb0",
  ],
  
  [
      "username"=>"amber",
      "password"=>"a7e64e9b46203422a49e91a939a867e9",
  ]

  ];


 
$messageErreur = "";
$compteVerifie = false;

$saltCrypte = md5($salt);


  if(

    (isset($_POST["username"]) && isset($_POST["password"]))
    
    &&
    
    (!empty($_POST["username"]) && !empty($_POST["password"]))
    
    
    ){
    
      $entreePasswordUtilisateur = $_POST["password"];
      $entreeUsernameUtilisateur = $_POST["username"];
      $userExists = false;
      $motDePasseDuTableau;
    
      foreach ($users as  $user) {
        
        if($entreeUsernameUtilisateur == $user["username"]){
    
          $userExists = true;
    
         $motDePasseDuTableau = $user["password"];
    
          
        };
    
      }
    
      if(!$userExists){
    
          $messageErreur = "Nom d'utilisateur inconnu";
      };
    
      if($userExists){
               
        if(md5($entreePasswordUtilisateur.$saltCrypte) == $motDePasseDuTableau  ){
    
           
    
            $compteVerifie = true;
    
            $messageErreur = "Connecte";

            $_SESSION['estConnecte']=true;

            $_SESSION['username'] = $_POST['username'];

        }else{$messageErreur = "Mot de passe faux";}
        
    }
    
    
    
    }  else{
            
      $messageErreur = "Champ non remplis";
    
    };


    if(isset($_POST['deconnexion'])){
      unset($_SESSION['estConnecte']);
      unset($_SESSION['username']);     
  }


    if(

      isset($_SESSION['estConnecte'])

    ){

      $compteVerifie=true  ;
      $messageErreur = "Connecte";
    }
   

?>