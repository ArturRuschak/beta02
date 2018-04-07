<?php
$continents =[
    "africa" =>  ["Elephant","African Hare","Elephant Shrew"],
    "europe" => ["Wild","Karakurt Spider","Norwegian Lemmin"],
    "asia"=> ["Malayan Tapir","Indian","Slow Loris"],
    "australia" => ["Cane Toad","Black Swan","Taipan"],
    "antarctica" =>["Whale","Emperor penguins","Adelie penguin"]
];
foreach ($continents as $key => $value ) {
    echo "<h1>", $key, ':', "</h1>", "<br/>";
    foreach ($value as $item) {
        if((str_word_count($item)) == 2) {
            //echo $item, "<br/>";
            $array[] = $item;
         $all_animals = explode(' ', $item );
         $first_animals[] = $all_animals[0];

            $second_animals[] = $all_animals[1];

            shuffle($first_animals);
            shuffle($second_animals);
            for($i=0;$i < $first_animals; $i++ ) {

                $firsec_animals[] =$first_animals[$i]. ' '. $second_animals[$i];
                $firsecc_animals = array_unique($firsec_animals);

                foreach ($firsecc_animals as  $val ) {

           if (str_word_count($val) == true) {

             $vall[] = $val;




           }


                }



        break;
            }
        }
       }
}
echo "<pre>";


var_dump($first_animals);
var_dump($second_animals);
var_dump($firsecc_animals);


