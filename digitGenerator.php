<?php
    // code is by ifeanyi zion chidiebere at sidehustle(@ify-zi) github(@ify_zi)
    function  generateAirtime(){
        $random_1 = rand(0,9);
        $random_2 = rand(0,9);
        $random_3 = rand(0,9);
        $random_4 = rand(0,9);
        $random_5 = rand(0,9);
        $random_6 = rand(0,9);
        $random_7 = rand(0,9);
        $random_8 = rand(0,9);
        $random_9 = rand(0,9);
        $random_10 = rand(0,9);
        $random_11= rand(0,9);
        $random_12= rand(0,9);
        $digit_pin = $random_1.$random_2.$random_3.$random_4.$random_5.$random_6.$random_7.$random_8.$random_9.$random_10.$random_11.$random_12;
            return $digit_pin;
    }
    $count = 0;
    while ($count <= 200){
        echo generateAirtime()."\r\n";
        $count = $count + 1;
    }


?>
