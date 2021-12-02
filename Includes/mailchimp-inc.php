<?php
session_start();
if(isset($_POST["submit"])) {
    $emailnews = $_POST["emailnews"];

    if(!empty($emailnews) && !filter_var($emailnews, FILTER_VALIDATE_EMAIL) === false) {

        $apiKey = "41681745da30e7a80676b6762b8cb3de-us20";
        $audienceId = "8122c58aff";
      
        $memberId = md5(strtolower($emailnews));
        $dataCenter = substr($apiKey, strpos($apiKey,'-')+1);
        $url = "https://" . $dataCenter . ".api.mailchimp.com/3.0/lists/" . $memberId; //vérifier scrupuleusement les paramètres de l'url

        $json = json_encode([
            'email_adress' => $emailnews,
            'status' => 'subscribed'
        ]);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type : application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

    }



}