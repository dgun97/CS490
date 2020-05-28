<?php

        $post_data = $_POST;
    
        $curl_mid = curl_init();
    
        $url_mid = "https://web.njit.edu/~dl453/CS490/newQuestion.php";
        curl_setopt($curl_mid, CURLOPT_URL, $url_mid);
        curl_setopt($curl_mid, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_mid, CURLOPT_POST, 1);
        curl_setopt($curl_mid, CURLOPT_POSTFIELDS, $post_data);
        $result_mid = curl_exec($curl_mid);
        curl_close($curl_mid);
        //echo $result_mid;
    


    
?>
