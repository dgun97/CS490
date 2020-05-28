<?php

        if(isset($_POST['name'])){
                $examName = $_POST['name'];
                $curl_mid = curl_init();
    
                $url_mid = "https://web.njit.edu/~dl453/CS490/newTest.php";
                curl_setopt($curl_mid, CURLOPT_URL, $url_mid);
                curl_setopt($curl_mid, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl_mid, CURLOPT_POST, 1);
                curl_setopt($curl_mid, CURLOPT_POSTFIELDS, $examName);
                $result_mid = curl_exec($curl_mid);
                curl_close($curl_mid);
        }
        if(isset($_POST['examquestions'])){
                $examQuestions = $_POST['examquestions'];
                $curl_mid = curl_init();
                $url_mid = "https://web.njit.edu/~dl453/CS490/addQuestion.php";
                curl_setopt($curl_mid, CURLOPT_URL, $url_mid);
                curl_setopt($curl_mid, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl_mid, CURLOPT_POST, 1);
                curl_setopt($curl_mid, CURLOPT_POSTFIELDS, $examQuestions);
                $result_mid = curl_exec($curl_mid);
                curl_close($curl_mid);
        }
        //echo $result_mid;
        //echo $result_mid;


    
?>
