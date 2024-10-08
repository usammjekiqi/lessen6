<?php
// $cars = array(
//     array("BMW" , "Gjermani" , 200),
//     array("Ferari","Itali" , 999),
//     array("Golf 2sh" , "Holand" ,2),
// );

// echo $cars[0][0] . ":origjina:" . $cars[0][1] . "kosto:" . $cars[0][2] . ",<br>" ;
// echo $cars[1][0] . ":origjina:" . $cars[1][1] . "kosto:" . $cars[1][2] . ",<br>";
// echo $cars[2][0] . ":origjina" . $cars[2][1] . "kosto:" . $cars[2][2] . ",<br>";

// for ($row=0; $row <3 ; $row++) { 
   
//     echo "<p> Row Nomber $row </p>" ;

//     echo"<ul>";

//     for($col=0; $col<3 ; $col++){
//         echo "<li>".$cars[$row][$col]. "</li>";

//     }
//    echo "</ul>";



// }



// $phones = array(
//     array("apple" , "iphone 16" , 200),
//     array("apple","iphone 15" , 999),
//     array("apple" , "iphone 14" ,2),
// );

// echo $phones[0][0] . ":origjina:" . $phones[0][1] . "kosto:" . $phones[0][2] . ",<br>" ;
// echo $phones[1][0] . ":origjina:" . $phones[1][1] . "kosto:" . $phones[1][2] . ",<br>";
// echo $phones[2][0] . ":origjina" . $phones[2][1] . "kosto:" . $phones[2][2] . ",<br>";

// for ($row=0; $row <3 ; $row++) { 
   
//     echo "<p> Row Nomber $row </p>" ;

//     echo"<ul>";

//     for($col=0; $col<3 ; $col++){
//         echo "<li>".$phones[$row][$col]. "</li>";

//     }
//    echo "</ul>";
 


// }





// $n  = array(
//     array(1,2,3),
//     array(1,2,3),
//     array(1,2,3)
// );


// for ($i=1; $i <4 ; $i++) {
    
//     for($j=1; $j<4 ; $j++){
//         echo "arry: $i element $j <br>";
//     }
//     # code...
// };


//  for ($i=1; $i < 5; $i++) { 
//     for($j=1; $j<=$i ; $j++){
//         echo " * ";
//     }
//     echo "</br>";
//  }
   


$nota = array(
    "matematik" => "5",
    "matematik1" => "2",
    "matematik2" => "4",
    "matematik3" => "3",
);

foreach($nota as $landa => $nota){
    echo "landa".$landa . ", nota:" . $nota;
    echo "<br>";
}





?>