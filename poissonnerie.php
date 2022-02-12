<?php 

$saumon =[
  "id"=>1,
    "nom"=>"Saumon",
    "description"=>"Le poisson le plus gras",
    "prix" => 25,
    "image"=>"saumon.jpg",
    "eau"=> "douce",
    "protegee" => false
  ];
  
  $espadon=[
    "id"=>2,
    "nom"=>"Espadon",
    "description"=> "la viande de la mer",
    "prix"=> 18,
    "image"=> "espadon.jpg",
    "eau"=> "mer",
    "protegee" => false
  ];
  
  $fletan =[
    "id"=>3,
  "nom"=>"Fletan",
  "description"=>"Le poisson le plus délicat",
  "prix"=>30,
  "image"=>"fletan.jpg",
  "eau"=> "mer",
  "protegee" => false
  ];
  
  $truite =[
    "id"=>4,
    "nom"=>"Truite",
    "description"=>"Le Jumeau malefique du saumon",
    "prix"=>26,
    "image"=>"truite.jpg",
    "eau"=> "douce",
    "protegee" => false
    ];
    $encornet =[
      "id"=>5,
      "nom"=>"Encornet",
      "description"=>"A cuire en sauce ",
      "prix"=>13,
      "image"=>"encornet.jpg",
      "eau"=> "mer",
      "protegee" => false
      ];
      $dauphin =[
        "id"=>6,
        "nom"=>"Dauphin",
        "description"=>"Le plus intelligent",
        "prix"=>199,
        "image"=>"dauphin.jpg",
        "eau"=> "mer",
        "protegee" => true
        ];
        $requinMarteau =[
          "id"=>7,
          "nom"=>"Requin Marteau",
          "description"=>"Le plus dur ",
          "prix"=>299,
          "image"=>"requinmarteau.jpg",
          "eau"=> "mer",
          "protegee" => true
          ];
  
  
  
  $poissons=[$saumon,$espadon,$fletan,$truite,$encornet,$dauphin,$requinMarteau];
  
  
  $affichagePoisson = "";
  $cartePoisson = "";
  
  
  
  
  
  
  $type = false;
  if (isset ($_GET["type"])){
  $type=$_GET["type"];
  };

  foreach ($poissons as  $poisson) {
 
    $cartePoisson = "
    
      <div class='card col-3 align-items-center'>
        <img style='height:200px'
          src='img/$poisson[image]'
          class='card-img-top'
          alt='...' 
        />
        <div class='card-body'>
          <h5  class='card-title text-center'>$poisson[nom] </h5>
          <p class='card-text text-center'>$poisson[description]</p>
          <p class='card-text text-center'>$poisson[prix] €/kg</p>
          <p class='card-text text-center'>Poisson d'eau $poisson[eau] </p>
          <a href='#' class='btn btn-primary'>Acheter du $poisson[nom]</a>
        </div>
      </div>
    
    ";
    if(
      
      (!$type || $type == $poisson["eau"])
      
      &&
  
      ( !$poisson['protegee'] || $compteVerifie )
      
      )
  
    $affichagePoisson.=$cartePoisson;
   }
  






?>