<?php
// verificare la password inserita dall'utente, rispettando 4 caratteri.
//1) almeno 8 caratteri 
//2) almeno 1 numero 
//3) almeno 1 maiuscola
//4) almeno 1 carattere speciale 

//---------------------------------------------------------------------------------------------------

//step 1 maggiore di otto caratteri 

// function checkCaratteri($passw){
//     if(strlen($passw) >= 8){
//         return true;
//     } else {
//         echo "devi inserie 8 caratteri ";
//     }
//     return false;
// }

// function checkNumeri($passw){
//     for($i = 0; $i < strlen($passw); $i++){
//     if(is_numeric($passw[$i])){
//         return true;
//     }
//     }  
//     echo "devi inserie 1 numero ";

// return false;
// }

// function checkMaiuscola($passw){
//     for($i = 0; $i < strlen($passw); $i++){
//     if(ctype_upper($passw[$i])){
//         return true;
//     }
// } echo "almeno una maiuscola";
// return false;
// }


// function checkSpeciale($passw){
//     $specialChars = ["!", '@', '$', '%', '_', '+'];

//     for($i = 0; $i < strlen($passw); $i++){
//             if(in_array($passw[$i], $specialChars)){
//                 return true;
//             }
//         }echo "almeno uno speciale";
//     return false;
// }

// function checkPassword(){
//     $password = readline('Inserisci la password:');

//     $firstRule = checkCaratteri($password);
//     $secondRule = checkNumeri($password);
//     $thirdRule = checkMaiuscola($password);
//     $fourthRule = checkSpeciale($password);

//     if($firstRule && $secondRule && $thirdRule && $fourthRule){
//         echo 'Password inserita correttamente' . "\n";
//         return true;
//     } else {
    
//     }
//     return false;
// }

// $passwordValid = false;

// $num=0;

// do{
//    $passwordValid = checkPassword();
//    $num++;
// }
// while($passwordValid == false && $num<4);

// if($num>=4){
//  echo "hai superato i tentativi";
// }



//  function mediatuttuiNumeri(...$numbers){
//     $somma = array_sum($numbers) / count($numbers);

//     echo $somma;
//  }
// mediatuttuiNumeri(5,6,7,8,);

