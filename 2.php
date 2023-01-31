<?php
// $nom = "Elia";
// $prenom = "Akeb";

// echo "$nom \n $prenom";


// $prenom = 'Marc';
// $nom = 'Doe';
// $note1 = 10;
// $note2 = 20;

// echo 'Bonjour'.$nom. $prenom. 'Vous avec eu '. (($note1 + $note2)/2) . 'de moyenne';


// $eleve =[
//     'nom'=>'Doe',
//      'prenom'=>'Marc',
//      'notes'=>[10, 15, 20]
//     ];
// // $notes = array(12, 20);
// print_r($eleve['notes']);

// $note =readline('Entrez votre note:');

// if($note >= 10){
//     echo 'Bravo vous avez la moyenne';
// }else{
//     echo 'Dommage vous n\'avez pas la moyenne';
// }

// $eleves = [
//     'cm2' => 'Jean',
//     'cm1' => 'Marc'
// ];

// foreach($eleves as $eleve=>$classe){
//     echo "$eleve est dans la classe cm1 ou cm2\n";
// }



// $notes = [];

// $action = null;


// while($action !== 'fin'){
//     $action = readline('Entrer une note et fin pour terminer la saisie :');
//     if ($action !== 'fin'){
//         $notes[] =(int)$action;
//     }
// }

// foreach ($notes as $note){
//     echo "- $note \n";
// }


// $heure = readline('Entrez l\'heure souhaitée :');

// if($heure >= 19 || $heure <= 8){
//     echo 'le magazin est fermé';
// }else {
//     echo 'Le magazin est ouvert';
// }




// $variable2 = readline();

// var_dump($variable2, 'test');


// $mot = readline('Entrez votre mot: ');

// if(strtolower($mot) === strtolower(strrev($mot))){
//     echo 'Ceci est un palyndrome';
// }else{
//     echo 'Ceci n\'est pas un palindrome';
// }


// $notes = [15 ,12 ,11 ];
// $sum = array_sum($notes);
// $count = count($notes);

// echo 'Vous avez ' .($sum/$count). ' de moyenne';


// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


// function bonjour($nom) {
//     echo 'Bonjour'. $nom. "\n";
// }

// bonjour(' Jean');
// bonjour(' Marion');



// function bonjour($nom ) {
//   return 'Bonjour'. $nom. "\n";
// }

// $salutation1 = bonjour(' Jean');
// $salutation2 = bonjour('Marion');


// echo $salutation1;
// echo $salutation2;



// function bonjour($nom = 'Jean' ) {
//   return 'Bonjour'. $nom. "\n";
// }

// $salutation1 = bonjour();
// $salutation2 = bonjour();


// echo $salutation1;
// echo $salutation2;



// function repondre_oui_non($phrase){
// $reponse = readline($phrase . " - (o)ui/(n)on : ");
//     if($reponse === "o"){
//         return true;
//     }elseif ($reponse =='n'){
//         return false;
//     }
// }
// $resultat = repondre_oui_non('Voulez-vous continuer ?');
//var_dump($resultat);



// function demander_creneau($phrase = 'Veuillez entrer un créneau'){
//     echo $phrase. "\n";

//     while(true){
//         $ouverture = (int)readline('Heure d\'ouverture :');
//             if ($ouverture >= 0 || $ouverture <= 23 ){
//                 break;
//             }
//     }

//     while(true){
//     $fermeture = readline('Heure de femeture :');
//         if($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture){     
//             break;
//         }
//     }
//     return [$ouverture, $fermeture];
// }

// $creneau = demander_creneau();
// $creneau2 = demander_creneau('veuillez entrer votre creneau');

// var_dump($creneau, $creneau2);


$eleves= ['Elia', 'Wassim', 'Thomas', 'Hakim', 'Meriem', 'Youssef', 'Marc', 'Theo', 'Djamila', 'Sami','Ikbal'];

shuffle($eleves);
$groupe = array_chunk($eleves, 3);
var_dump($groupe);

//J'ai 11 employés il faudrait que je les repartisse sur 6 jours de la semaine en deux groupes par jour.

//Les boucles
for ($nombre = 1; $nombre <= 7; $nombre++){
    echo "$nombre \r";
}

$clients = [
    "ref1"=>[
        "nom" => "Gambier",
        "prenom"=> "Benoit"
    ],
    "ref2"=>[
        "nom" => "Akeb-daoud",
        "prenom"=> "Elia"
    ]
    ];

echo sizeof($clients);

$planning = [
    'jour1' => ['Elia', 'Wassim', 'Thomas', 'Hakim', 'Meriem', 'Youssef', 'Marc', 'Theo', 'Djamila', 'Sami','Ikbal'],
    'jour2' => ['Elia', 'Wassim', 'Thomas', 'Hakim', 'Meriem', 'Youssef', 'Marc', 'Theo', 'Djamila', 'Sami','Ikbal'],
    'jour3' => ['Elia', 'Wassim', 'Thomas', 'Hakim', 'Meriem', 'Youssef', 'Marc', 'Theo', 'Djamila', 'Sami','Ikbal'],
    'jour4' => ['Elia', 'Wassim', 'Thomas', 'Hakim', 'Meriem', 'Youssef', 'Marc', 'Theo', 'Djamila', 'Sami','Ikbal'],
    'jour5' => ['Elia', 'Wassim', 'Thomas', 'Hakim', 'Meriem', 'Youssef', 'Marc', 'Theo', 'Djamila', 'Sami','Ikbal']
];

foreach($planning as $plannings){
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .container{
            display: flex;
            justify-content: space-around;
        }
    </style>
    <div class="container">
    <h1>Equipe aléatoire :</h1>
    <div class="g1">
        <h3>Lundi</h3>
        <p><?= $groupe[0][0]; ?></p>
        <p><?= $groupe[0][1]; ?></p>
        <p><?= $groupe[0][2]; ?></p>
    </div>

    <div class="g2">
        <h3>Mardi</h3>
        <p><?= $groupe[1][0]; ?></p>
        <p><?= $groupe[1][1]; ?></p>
        <p><?= $groupe[1][2]; ?></p>
    </div>

    <div class="g3">
        <h3>Mercredi</h3>
        <p><?= $groupe[2][0]; ?></p>
        <p><?= $groupe[2][1]; ?></p>
        <p><?= $groupe[2][2]; ?></p>
    </div>

    <div class="g4">
        <h3>Jeudi</h3>
        <p><?= $groupe[3][0]; ?></p>
        <p><?= $groupe[3][1]; ?></p>
    </div>
    </div>
</body>
</html>