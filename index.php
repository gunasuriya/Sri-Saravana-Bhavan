<?php
$servername = "localhost";
$username = "id2366159_funkypanda";
$password = "hakunamatata";
$dbname = "id2366159_funkypanda";
date_default_timezone_set("Asia/Kolkata");
$dat = date("d-m-Y h:i:sa");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  
$sql = "UPDATE View_Counter SET Views = Views + 1, Date_Time ='".$dat."' WHERE Id=3";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);

?>
<!DOCTYPE html>	
<html>
<head>
	<title>Sri Saravana Bhavan</title>
	<meta charset=UTF-8">
	<meta name="theme-color" content="yellow" />
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="bootstrap.min.css">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--<script src="jquery.min.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--<script src="bootstrap.min.js"></script>-->
	<link rel="stylesheet" href="animate.css">
	<script src="scrollreveal.js"></script>

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script>
		window.sr = ScrollReveal({ reset: true });
	</script>
	<style>
        
        .turnDeviceNotification {
             background-image:url('Images/turndevice.png');
             background-size:cover;
             position:fixed;
             top: 0;
             left:0;
             z-index:9999;
             height:100%;
             width:100%;
             display: none;
         }
	
       
		
		.fixed {
			position:fixed;
			width:100%;
			z-index:99;
			opacity:1;
			top:0;
		}

		.fixed1 {
			position:fixed;
			width:100%;
			z-index:99;
			background-color: #fff81d;
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='260' height='260' viewBox='0 0 260 260'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%237908ff' fill-opacity='0.5'%3E%3Cpath d='M24.37 16c.2.65.39 1.32.54 2H21.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06A5 5 0 0 1-17.45 28v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H-20a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1L.9 19.22a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0L2.26 23h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM-13.82 27l16.37 4.91L18.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H-13.1z'/%3E%3Cpath id='path6_fill-copy' d='M284.37 16c.2.65.39 1.32.54 2H281.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06a5 5 0 0 1-2.24-8.94v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H240a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM246.18 27l16.37 4.91L278.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H246.9z'/%3E%3Cpath d='M159.5 21.02A9 9 0 0 0 151 15h-42a9 9 0 0 0-8.5 6.02 6 6 0 0 0 .02 11.96A8.99 8.99 0 0 0 109 45h42a9 9 0 0 0 8.48-12.02 6 6 0 0 0 .02-11.96zM151 17h-42a7 7 0 0 0-6.33 4h54.66a7 7 0 0 0-6.33-4zm-9.34 26a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-7a7 7 0 1 1 0-14h42a7 7 0 1 1 0 14h-9.34zM109 27a9 9 0 0 0-7.48 4H101a4 4 0 1 1 0-8h58a4 4 0 0 1 0 8h-.52a9 9 0 0 0-7.48-4h-42z'/%3E%3Cpath d='M39 115a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm6-8a6 6 0 1 1-12 0 6 6 0 0 1 12 0zm-3-29v-2h8v-6H40a4 4 0 0 0-4 4v10H22l-1.33 4-.67 2h2.19L26 130h26l3.81-40H58l-.67-2L56 84H42v-6zm-4-4v10h2V74h8v-2h-8a2 2 0 0 0-2 2zm2 12h14.56l.67 2H22.77l.67-2H40zm13.8 4H24.2l3.62 38h22.36l3.62-38z'/%3E%3Cpath d='M129 92h-6v4h-6v4h-6v14h-3l.24 2 3.76 32h36l3.76-32 .24-2h-3v-14h-6v-4h-6v-4h-8zm18 22v-12h-4v4h3v8h1zm-3 0v-6h-4v6h4zm-6 6v-16h-4v19.17c1.6-.7 2.97-1.8 4-3.17zm-6 3.8V100h-4v23.8a10.04 10.04 0 0 0 4 0zm-6-.63V104h-4v16a10.04 10.04 0 0 0 4 3.17zm-6-9.17v-6h-4v6h4zm-6 0v-8h3v-4h-4v12h1zm27-12v-4h-4v4h3v4h1v-4zm-6 0v-8h-4v4h3v4h1zm-6-4v-4h-4v8h1v-4h3zm-6 4v-4h-4v8h1v-4h3zm7 24a12 12 0 0 0 11.83-10h7.92l-3.53 30h-32.44l-3.53-30h7.92A12 12 0 0 0 130 126z'/%3E%3Cpath d='M212 86v2h-4v-2h4zm4 0h-2v2h2v-2zm-20 0v.1a5 5 0 0 0-.56 9.65l.06.25 1.12 4.48a2 2 0 0 0 1.94 1.52h.01l7.02 24.55a2 2 0 0 0 1.92 1.45h4.98a2 2 0 0 0 1.92-1.45l7.02-24.55a2 2 0 0 0 1.95-1.52L224.5 96l.06-.25a5 5 0 0 0-.56-9.65V86a14 14 0 0 0-28 0zm4 0h6v2h-9a3 3 0 1 0 0 6H223a3 3 0 1 0 0-6H220v-2h2a12 12 0 1 0-24 0h2zm-1.44 14l-1-4h24.88l-1 4h-22.88zm8.95 26l-6.86-24h18.7l-6.86 24h-4.98zM150 242a22 22 0 1 0 0-44 22 22 0 0 0 0 44zm24-22a24 24 0 1 1-48 0 24 24 0 0 1 48 0zm-28.38 17.73l2.04-.87a6 6 0 0 1 4.68 0l2.04.87a2 2 0 0 0 2.5-.82l1.14-1.9a6 6 0 0 1 3.79-2.75l2.15-.5a2 2 0 0 0 1.54-2.12l-.19-2.2a6 6 0 0 1 1.45-4.46l1.45-1.67a2 2 0 0 0 0-2.62l-1.45-1.67a6 6 0 0 1-1.45-4.46l.2-2.2a2 2 0 0 0-1.55-2.13l-2.15-.5a6 6 0 0 1-3.8-2.75l-1.13-1.9a2 2 0 0 0-2.5-.8l-2.04.86a6 6 0 0 1-4.68 0l-2.04-.87a2 2 0 0 0-2.5.82l-1.14 1.9a6 6 0 0 1-3.79 2.75l-2.15.5a2 2 0 0 0-1.54 2.12l.19 2.2a6 6 0 0 1-1.45 4.46l-1.45 1.67a2 2 0 0 0 0 2.62l1.45 1.67a6 6 0 0 1 1.45 4.46l-.2 2.2a2 2 0 0 0 1.55 2.13l2.15.5a6 6 0 0 1 3.8 2.75l1.13 1.9a2 2 0 0 0 2.5.8zm2.82.97a4 4 0 0 1 3.12 0l2.04.87a4 4 0 0 0 4.99-1.62l1.14-1.9a4 4 0 0 1 2.53-1.84l2.15-.5a4 4 0 0 0 3.09-4.24l-.2-2.2a4 4 0 0 1 .97-2.98l1.45-1.67a4 4 0 0 0 0-5.24l-1.45-1.67a4 4 0 0 1-.97-2.97l.2-2.2a4 4 0 0 0-3.09-4.25l-2.15-.5a4 4 0 0 1-2.53-1.84l-1.14-1.9a4 4 0 0 0-5-1.62l-2.03.87a4 4 0 0 1-3.12 0l-2.04-.87a4 4 0 0 0-4.99 1.62l-1.14 1.9a4 4 0 0 1-2.53 1.84l-2.15.5a4 4 0 0 0-3.09 4.24l.2 2.2a4 4 0 0 1-.97 2.98l-1.45 1.67a4 4 0 0 0 0 5.24l1.45 1.67a4 4 0 0 1 .97 2.97l-.2 2.2a4 4 0 0 0 3.09 4.25l2.15.5a4 4 0 0 1 2.53 1.84l1.14 1.9a4 4 0 0 0 5 1.62l2.03-.87zM152 207a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6 2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-11 1a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-6 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3-5a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-8 8a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm0 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4 7a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5-2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-5-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-24 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm16 5a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm7-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0zm86-29a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1 246 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM275 214a29 29 0 0 0-57.97 0h57.96zM72.33 198.12c-.21-.32-.34-.7-.34-1.12v-12h-2v12a4.01 4.01 0 0 0 7.09 2.54c.57-.69.91-1.57.91-2.54v-12h-2v12a1.99 1.99 0 0 1-2 2 2 2 0 0 1-1.66-.88zM75 176c.38 0 .74-.04 1.1-.12a4 4 0 0 0 6.19 2.4A13.94 13.94 0 0 1 84 185v24a6 6 0 0 1-6 6h-3v9a5 5 0 1 1-10 0v-9h-3a6 6 0 0 1-6-6v-24a14 14 0 0 1 14-14 5 5 0 0 0 5 5zm-17 15v12a1.99 1.99 0 0 0 1.22 1.84 2 2 0 0 0 2.44-.72c.21-.32.34-.7.34-1.12v-12h2v12a3.98 3.98 0 0 1-5.35 3.77 3.98 3.98 0 0 1-.65-.3V209a4 4 0 0 0 4 4h16a4 4 0 0 0 4-4v-24c.01-1.53-.23-2.88-.72-4.17-.43.1-.87.16-1.28.17a6 6 0 0 1-5.2-3 7 7 0 0 1-6.47-4.88A12 12 0 0 0 58 185v6zm9 24v9a3 3 0 1 0 6 0v-9h-6z'/%3E%3Cpath d='M-17 191a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H3a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2H4zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1-14 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM15 214a29 29 0 0 0-57.97 0h57.96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
			top:0;
		}
		

		/* Remove the navbar's default margin-bottom and rounded borders */ 
		.navbar {
			margin-bottom: 0;
			margin-top: 0;
			border-radius: 0;
			border:none;
			padding:1px;
		}

		@font-face{
			font-family: "Bungasai";
			src:url(fonts/Bungasai.ttf);
		}

		@font-face{
			font-family: "thundertitan";
			src:url(fonts/thundertitan.ttf);
		}
		@font-face{
			font-family: "AManoRegulold";
			src:url(fonts/AManoRegulold.ttf);
		}



		/* Add a gray background color and some padding to the footer */

		.foo {
		
			padding: 12px;
		}

		.carousel-inner img {
			width: 100%; /* Set width to 100% */
			margin: auto;
                        border-radius:10px;
			min-height:200px;
			
		}
		
		#nav2 .navbar .navbar-nav {
			display: inline-block;
			float: none;
		}

		#nav2 .navbar .navbar-collapse {
			text-align: center;
		}

		.links{

			font-family:AManoRegulold;
			font-size:17px;
			
		}

        .links:hover{
		
		background-color:purple;
		}             
		
			



		@media only screen and (max-width: 900px) { 
			.mast {
				display:none;
			}
			.poda{
				display:none;
			}
		}
		
		@media only screen and (min-width: 901px) { 
			.sidebar #sidenav1{
				display:none;
			}
		}
		
		@media only screen and (max-width: 900px) { 
			#sidenav1{
				float:left;
			}
		}
		

		.ani2 img{
			width:206px;
			height:246px;/* 100% Full-height */
			/* 0 width - change this with JavaScript */
			position: fixed; /* Stay in place */
			z-index: 105; /* Stay on top */
			top:250px;
			left:15px;
			overflow-x: hidden; /* Disable horizontal scroll */
			/* Place content 20px from the top */
			/* 0.5 second transition effect to slide in the sidenav */
		}
		
		
		.ani1 span{
			position: fixed; /* Stay in place */
			z-index: 105; /* Stay on top */
			font-family:Bungasai;
			font-size:18px;
			top:230px;
			border-radius:5px;
			background-color:purple;
			color:yellow;
			right:0px;
			overflow-x: hidden; /* Disable horizontal scroll */
			/* Place content 20px from the top */
			/* 0.5 second transition effect to slide in the sidenav */
		}
		
	

		.ani3 span{
			position: fixed; /* Stay in place */
			z-index: 102; /* Stay on top */
			font-family:Bungasai;
			font-size:20px;
			top:162px;
			color:red;
			right:30px;
			overflow-x: hidden; /* Disable horizontal scroll */
			/* Place content 20px from the top */
			/* 0.5 second transition effect to slide in the sidenav */

		}

		.ani3 img{
			width:85px;
			height:75px;/* 100% Full-height */
			/* 0 width - change this with JavaScript */
			position: fixed; /* Stay in place */
			z-index: 105; /* Stay on top */
			top:162px;
			right:30px;
			overflow-x: hidden; /* Disable horizontal scroll */
			/* Place content 20px from the top */
			/* 0.5 second transition effect to slide in the sidenav */
		}
		
		@media only screen and (max-width: 1100px) { 
			.ani3 span{
			right:25px;
			}
			.ani3 img{
			right:25px;
			}
			.ani2 img{
				width:186px;
				height:226px;
				top:190px;
				left:0px;
			}
		} 

		@media only screen and (max-width: 900px) { 
			.ani3 span{
			right:25px;
			}
			.ani3 img{
			right:25px;
			}
			.ani2 img{
				width:146px;
				height:176px;
				top:140px;
				left:0px;
			}
		} 

		@media only screen and (max-width: 750px) { 
			.ani3 span{
				right:15px;
			}
			.ani3 img{
				right:15px;
			}
			.ani2 img{
				width:126px;
				height:146px;
				top:120px;
				left:-10px;
			}
		} 

		@media only screen and (max-width: 550px) { 
			.ani3 span{
				right:10px;
			}
			.ani3 img{
				right:10px;
			}
			.ani2 img{
				width:126px;
				height:146px;
				top:120px;
				left:-10px;
			}
			
		} 


		@media only screen and (max-width: 500px) { 
			.ani3 span{
				top:272px;
				right:0px;
			}
			.ani3 img{
				top:272px;
				right:0px;
			}
			.ani2 img{
				width:96px;
				height:116px;/* 100% Full-height */
				/* 0 width - change this with JavaScript */
				position: fixed; /* Stay in place */
				z-index: 105; /* Stay on top */
				top:120px;
				left:-10px;
				overflow-x: hidden; /* Disable horizontal scroll */
				/* Place content 20px from the top */
				/* 0.5 second transition effect to slide in the sidenav */
			}
			.ani1 span{
				top:340px;
                                 font-size:15px;
				right:0px;
			}
		} 

                   @media only screen and (max-width: 400px) { 
			.ani3 span{
				top:202px;
				right:0px;
			}
			.ani3 img{
				top:202px;
				right:0px;
			}
			.ani2 img{
				width:96px;
				height:116px;/* 100% Full-height */
				/* 0 width - change this with JavaScript */
				position: fixed; /* Stay in place */
				z-index: 105; /* Stay on top */
				top:120px;
				left:-10px;
				overflow-x: hidden; /* Disable horizontal scroll */
				/* Place content 20px from the top */
				/* 0.5 second transition effect to slide in the sidenav */
			}
			.ani1 span{
				top:270px;
				right:0px;
                                font-size:15px;
			}
		} 



		#anime3{
			display:none;
		}

		/* The side navigation menu */
		.sidenav {
			height: 100%; /* 100% Full-height */
			width: 0; /* 0 width - change this with JavaScript */
			position: fixed; /* Stay in place */
			z-index: 105; /* Stay on top */
			top: 0;
			left: 0;
			background-color: purple;
			overflow-x: hidden; /* Disable horizontal scroll */
			padding-top: 20px; /* Place content 20px from the top */
			transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
		}

		/* The navigation menu links */
		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 20px;
			font-family:Bungasai;
			color: purple;
                   	display: block;
			transition: 0.3s
		}

		/* When you mouse over the navigation links, change their color */
		.sidenav a:hover, .offcanvas a:focus{
			color: black;
		}

		/* Position and style the close button (top right corner) */
		.sidenav .closebtn1 {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
			color:white;
		}

			

		/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
		}

		/* Bob */
		@-webkit-keyframes hvr-bob {
			0% {
				-webkit-transform: translateY(-8px);
				transform: translateY(-8px);
			}
			50% {
				-webkit-transform: translateY(-4px);
				transform: translateY(-4px);
			}
			100% {
				-webkit-transform: translateY(-8px);
				transform: translateY(-8px);
			}
		}
		
		@keyframes hvr-bob {
			0% {
				-webkit-transform: translateY(-8px);
				transform: translateY(-8px);
			}
			50% {
				-webkit-transform: translateY(-4px);
				transform: translateY(-4px);
			}
			100% {
				-webkit-transform: translateY(-8px);
				transform: translateY(-8px);
			}
		}
		@-webkit-keyframes hvr-bob-float {
			100% {
				-webkit-transform: translateY(-8px);
				transform: translateY(-8px);
			}
		}
		@keyframes hvr-bob-float {
			100% {
				-webkit-transform: translateY(-8px);
				transform: translateY(-8px);
			}
		}
		.hvr-bob {
			display: inline-block;
			vertical-align: middle;
			-webkit-transform: perspective(1px) translateZ(0);
			transform: perspective(1px) translateZ(0);
			box-shadow: 0 0 1px transparent;
			-webkit-animation-name: hvr-bob-float, hvr-bob;
			animation-name: hvr-bob-float, hvr-bob;
			-webkit-animation-duration: .5s, 1s;
			animation-duration: .5s, .8s;
			-webkit-animation-delay: 0s, .3s;
			animation-delay: 0s, .3s;
			-webkit-animation-timing-function: ease-out, ease-in-out;
			animation-timing-function: ease-out, ease-in-out;
			-webkit-animation-iteration-count: 1, infinite;
			animation-iteration-count: 1, infinite;
			-webkit-animation-fill-mode: forwards;
			animation-fill-mode: forwards;
			-webkit-animation-direction: normal, alternate;
			animation-direction: normal, alternate;
		}
		.poda{
			display:none;
			float:left;
			top:0;
			z-index:105;
			margin-top:0;
			padding-left:10px;
			padding-top:10px;
			position:fixed;
		}
		
	/* Pulse */
@-webkit-keyframes hvr-pulse {
  25% {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
  }
  75% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }
}
@keyframes hvr-pulse {
  25% {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
  }
  75% {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }
}
.hvr-pulse {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
}
.hvr-pulse:hover, .hvr-pulse:focus, .hvr-pulse:active {
  -webkit-animation-name: hvr-pulse;
  animation-name: hvr-pulse;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}


	#myBtn {
			display: none; /* Hidden by default */
			position: fixed; /* Fixed/sticky position */
			bottom: 20px; /* Place the button at the bottom of the page */                      opacity:0.8;
			right: 30px; /* Place the button 30px from the right */
			z-index: 99; /* Make sure it does not overlap */
			border: none; /* Remove borders */
			outline: none; /* Remove outline */
                         background-color:rgba(0,0,0,0.5);
			 /* Set a background color */
			color: #00F3FF; /* Text color */
			cursor: pointer; /* Add a mouse pointer on hover */
			padding: 15px; /* Some padding */
			border-radius: 50px; /* Rounded corners */
                       
		}

		#myBtn:hover {
			color: #00F3FF; 
		}


         
		@media only screen and (max-width: 900px) { 
                      #myBtn{
                             right:20px;
            
                      }
		} 

		@media only screen and (max-width: 750px) { 
		          #myBtn{
                             right:15px;
   
                      }
		} 

		@media only screen and (max-width: 560px) { 
		          #myBtn{
                             right:5px;

                      }
		} 

		@media only screen and (max-width: 500px) { 
		           #myBtn{
                             right:0px;

                      }
		} 
		@media only screen and (max-width: 400px) { 
		        #myBtn{
                             right:0px;
       
                             bottom: 30px;
                      }
			
		} 
		
		.navbar-brand {
			position: absolute;
			width: 100%;
			left: 0;
			top: 0;
                        margin-top:0;
			text-align: center;
			margin: auto;
			z-index:0;	
			font-size:40px;
			
		}
		.navbar-left{
			padding-left:10px;
			font-size:30px;
			z-index:2;
			display:none;
		}
		
		
		#fun{
			padding-top:10px;
		}
				  
			


			@media only screen and (max-width: 900px) { 

				.navbar-brand{
					font-size:35px;
				}
				.navbar-left{
					font-size:30px;
					display:block;
					
				}
				
				#fun{
					padding-top:10px;
				}
						  

			} 

			@media only screen and (max-width: 767px) { 
				.links{
					margin-left:10px;

				}
				.navbar-brand{
					font-size:30px;
				}
				.navbar-left{
				
					font-size:23px;
				}
			
				#fun{
					padding-top:5px;
				}
			} 

			@media only screen and (max-width: 560px) { 
				.links{
					margin-left:10px;

				}
				.navbar-brand{
					margin-top:-2px;
					font-size:25px;
				}
				.navbar-left{
					padding-top:5px;
					font-size:22px;
				}
				
				#fun{
					padding-top:0px;
				}
			} 

			@media only screen and (max-width: 500px) { 
				.links{
					margin-left:10px;
				}
				.navbar-brand{
					margin-top:-2px;
					font-size:23px;
				}
				.navbar-left{
					padding-top:5px;
					font-size:20px;
				}
				#fun{
					padding-top:0px;
				}

			
			} 
			@media only screen and (max-width: 400px) { 
				.navbar-brand{
					margin-top:-2px;
                                        font-size:25px;
				}
				.navbar-left{
                                        padding-top:5px;
					font-size:20px;
				}
				#fun{
					padding-top:0px;
				}
			
			} 

			@media only screen and (max-width: 320px) { 
				.navbar-brand{
					margin-top:-2px;
                                        font-size:24px;
				}
				.navbar-left{
                                        padding-top:5px;
					font-size:20px;
				}
				#fun{
					padding-top:0px;
				}
				
			} 		
			
		
		
		
		body{
			background-color: #ffff28;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='260' height='260' viewBox='0 0 260 260'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23963003' fill-opacity='0.24'%3E%3Cpath d='M24.37 16c.2.65.39 1.32.54 2H21.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06A5 5 0 0 1-17.45 28v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H-20a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1L.9 19.22a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0L2.26 23h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM-13.82 27l16.37 4.91L18.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H-13.1z'/%3E%3Cpath id='path6_fill-copy' d='M284.37 16c.2.65.39 1.32.54 2H281.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06a5 5 0 0 1-2.24-8.94v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H240a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM246.18 27l16.37 4.91L278.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H246.9z'/%3E%3Cpath d='M159.5 21.02A9 9 0 0 0 151 15h-42a9 9 0 0 0-8.5 6.02 6 6 0 0 0 .02 11.96A8.99 8.99 0 0 0 109 45h42a9 9 0 0 0 8.48-12.02 6 6 0 0 0 .02-11.96zM151 17h-42a7 7 0 0 0-6.33 4h54.66a7 7 0 0 0-6.33-4zm-9.34 26a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-7a7 7 0 1 1 0-14h42a7 7 0 1 1 0 14h-9.34zM109 27a9 9 0 0 0-7.48 4H101a4 4 0 1 1 0-8h58a4 4 0 0 1 0 8h-.52a9 9 0 0 0-7.48-4h-42z'/%3E%3Cpath d='M39 115a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm6-8a6 6 0 1 1-12 0 6 6 0 0 1 12 0zm-3-29v-2h8v-6H40a4 4 0 0 0-4 4v10H22l-1.33 4-.67 2h2.19L26 130h26l3.81-40H58l-.67-2L56 84H42v-6zm-4-4v10h2V74h8v-2h-8a2 2 0 0 0-2 2zm2 12h14.56l.67 2H22.77l.67-2H40zm13.8 4H24.2l3.62 38h22.36l3.62-38z'/%3E%3Cpath d='M129 92h-6v4h-6v4h-6v14h-3l.24 2 3.76 32h36l3.76-32 .24-2h-3v-14h-6v-4h-6v-4h-8zm18 22v-12h-4v4h3v8h1zm-3 0v-6h-4v6h4zm-6 6v-16h-4v19.17c1.6-.7 2.97-1.8 4-3.17zm-6 3.8V100h-4v23.8a10.04 10.04 0 0 0 4 0zm-6-.63V104h-4v16a10.04 10.04 0 0 0 4 3.17zm-6-9.17v-6h-4v6h4zm-6 0v-8h3v-4h-4v12h1zm27-12v-4h-4v4h3v4h1v-4zm-6 0v-8h-4v4h3v4h1zm-6-4v-4h-4v8h1v-4h3zm-6 4v-4h-4v8h1v-4h3zm7 24a12 12 0 0 0 11.83-10h7.92l-3.53 30h-32.44l-3.53-30h7.92A12 12 0 0 0 130 126z'/%3E%3Cpath d='M212 86v2h-4v-2h4zm4 0h-2v2h2v-2zm-20 0v.1a5 5 0 0 0-.56 9.65l.06.25 1.12 4.48a2 2 0 0 0 1.94 1.52h.01l7.02 24.55a2 2 0 0 0 1.92 1.45h4.98a2 2 0 0 0 1.92-1.45l7.02-24.55a2 2 0 0 0 1.95-1.52L224.5 96l.06-.25a5 5 0 0 0-.56-9.65V86a14 14 0 0 0-28 0zm4 0h6v2h-9a3 3 0 1 0 0 6H223a3 3 0 1 0 0-6H220v-2h2a12 12 0 1 0-24 0h2zm-1.44 14l-1-4h24.88l-1 4h-22.88zm8.95 26l-6.86-24h18.7l-6.86 24h-4.98zM150 242a22 22 0 1 0 0-44 22 22 0 0 0 0 44zm24-22a24 24 0 1 1-48 0 24 24 0 0 1 48 0zm-28.38 17.73l2.04-.87a6 6 0 0 1 4.68 0l2.04.87a2 2 0 0 0 2.5-.82l1.14-1.9a6 6 0 0 1 3.79-2.75l2.15-.5a2 2 0 0 0 1.54-2.12l-.19-2.2a6 6 0 0 1 1.45-4.46l1.45-1.67a2 2 0 0 0 0-2.62l-1.45-1.67a6 6 0 0 1-1.45-4.46l.2-2.2a2 2 0 0 0-1.55-2.13l-2.15-.5a6 6 0 0 1-3.8-2.75l-1.13-1.9a2 2 0 0 0-2.5-.8l-2.04.86a6 6 0 0 1-4.68 0l-2.04-.87a2 2 0 0 0-2.5.82l-1.14 1.9a6 6 0 0 1-3.79 2.75l-2.15.5a2 2 0 0 0-1.54 2.12l.19 2.2a6 6 0 0 1-1.45 4.46l-1.45 1.67a2 2 0 0 0 0 2.62l1.45 1.67a6 6 0 0 1 1.45 4.46l-.2 2.2a2 2 0 0 0 1.55 2.13l2.15.5a6 6 0 0 1 3.8 2.75l1.13 1.9a2 2 0 0 0 2.5.8zm2.82.97a4 4 0 0 1 3.12 0l2.04.87a4 4 0 0 0 4.99-1.62l1.14-1.9a4 4 0 0 1 2.53-1.84l2.15-.5a4 4 0 0 0 3.09-4.24l-.2-2.2a4 4 0 0 1 .97-2.98l1.45-1.67a4 4 0 0 0 0-5.24l-1.45-1.67a4 4 0 0 1-.97-2.97l.2-2.2a4 4 0 0 0-3.09-4.25l-2.15-.5a4 4 0 0 1-2.53-1.84l-1.14-1.9a4 4 0 0 0-5-1.62l-2.03.87a4 4 0 0 1-3.12 0l-2.04-.87a4 4 0 0 0-4.99 1.62l-1.14 1.9a4 4 0 0 1-2.53 1.84l-2.15.5a4 4 0 0 0-3.09 4.24l.2 2.2a4 4 0 0 1-.97 2.98l-1.45 1.67a4 4 0 0 0 0 5.24l1.45 1.67a4 4 0 0 1 .97 2.97l-.2 2.2a4 4 0 0 0 3.09 4.25l2.15.5a4 4 0 0 1 2.53 1.84l1.14 1.9a4 4 0 0 0 5 1.62l2.03-.87zM152 207a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6 2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-11 1a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-6 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3-5a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-8 8a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm0 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4 7a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5-2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-5-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-24 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm16 5a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm7-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0zm86-29a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1 246 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM275 214a29 29 0 0 0-57.97 0h57.96zM72.33 198.12c-.21-.32-.34-.7-.34-1.12v-12h-2v12a4.01 4.01 0 0 0 7.09 2.54c.57-.69.91-1.57.91-2.54v-12h-2v12a1.99 1.99 0 0 1-2 2 2 2 0 0 1-1.66-.88zM75 176c.38 0 .74-.04 1.1-.12a4 4 0 0 0 6.19 2.4A13.94 13.94 0 0 1 84 185v24a6 6 0 0 1-6 6h-3v9a5 5 0 1 1-10 0v-9h-3a6 6 0 0 1-6-6v-24a14 14 0 0 1 14-14 5 5 0 0 0 5 5zm-17 15v12a1.99 1.99 0 0 0 1.22 1.84 2 2 0 0 0 2.44-.72c.21-.32.34-.7.34-1.12v-12h2v12a3.98 3.98 0 0 1-5.35 3.77 3.98 3.98 0 0 1-.65-.3V209a4 4 0 0 0 4 4h16a4 4 0 0 0 4-4v-24c.01-1.53-.23-2.88-.72-4.17-.43.1-.87.16-1.28.17a6 6 0 0 1-5.2-3 7 7 0 0 1-6.47-4.88A12 12 0 0 0 58 185v6zm9 24v9a3 3 0 1 0 6 0v-9h-6z'/%3E%3Cpath d='M-17 191a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H3a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2H4zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1-14 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM15 214a29 29 0 0 0-57.97 0h57.96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");}
		header{
				background-color: #800080;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='charlie-brown' fill='%239C92AC' fill-opacity='0.24'%3E%3Cpath d='M9.8 12L0 2.2V.8l10 10 10-10v1.4L10.2 12h-.4zm-4 0L0 6.2V4.8L7.2 12H5.8zm8.4 0L20 6.2V4.8L12.8 12h1.4zM9.8 0l.2.2.2-.2h-.4zm-4 0L10 4.2 14.2 0h-1.4L10 2.8 7.2 0H5.8z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
				}
		nav{
				background-color: #800080;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='charlie-brown' fill='%239C92AC' fill-opacity='0.24'%3E%3Cpath d='M9.8 12L0 2.2V.8l10 10 10-10v1.4L10.2 12h-.4zm-4 0L0 6.2V4.8L7.2 12H5.8zm8.4 0L20 6.2V4.8L12.8 12h1.4zM9.8 0l.2.2.2-.2h-.4zm-4 0L10 4.2 14.2 0h-1.4L10 2.8 7.2 0H5.8z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");}
		footer{
		background-color: #800080;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='charlie-brown' fill='%239C92AC' fill-opacity='0.24'%3E%3Cpath d='M9.8 12L0 2.2V.8l10 10 10-10v1.4L10.2 12h-.4zm-4 0L0 6.2V4.8L7.2 12H5.8zm8.4 0L20 6.2V4.8L12.8 12h1.4zM9.8 0l.2.2.2-.2h-.4zm-4 0L10 4.2 14.2 0h-1.4L10 2.8 7.2 0H5.8z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
			
		}
	</style>

</head>

<body > 
<button class="hvr-bob" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" style="font-size:30px;"></i></button>
	
	<a name="top" id="top"></a>
	
	<div class="turnDeviceNotification"></div>
	<header  id="fun" style="background-color:purple;">
	
		
		<nav class="navbar navbar-default" style="border-color:purple;background-color:purple;">
			<a class="navbar-brand" style="color:yellow;text-decoration:none;" href="index.html"><div class="animated slideInUp" style="font-family:Bungasai;text-align:center;">Sri Saravana Bhavan</div></a>
			<div class="navbar-collapse"  style="border:none;" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-left">
					<li><span onclick="openNav1()"  id="sidenav1" style="color:yellow;"><i class="fa fa-bars"></i></span></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</header>
	
	<div id="nav2">
	
		<!--<div class="sidebar"><span onclick="openNav1()"  id="sidenav1" style="color:yellow;"><i class="fa fa-bars"></i></span></div>	
		<div class="tophead animated slideInUp rev17" style="font-family:Bungasai;text-align:center;"><a style="color:yellow;text-decoration:none;" href="index.html">Sri Saravana Bhavan</a></div>-->
		<span class="poda animated infinite pulse  rev16" style="font-family: Bungasai; display: none;"><a style="color:yellow;text-decoration:none;" href="index.html">Sri Saravana Bhavan</a></span>
		<nav class="navbar bg-2 navbar-inverse mast" style="background-color:purple;text-align:center;">
			<div id="myNavbar" style="text-align:center;">
				
				<ul class="nav navbar-nav">
					
					<li><a class="links" style="color:#00F3FF;" href="index.html"><b>Home</b></a></li>
					<li><a class="links" style="color:white;" href="menu.html"><b>Menu</b></a></li>
					<!--<li><a class="links" style="color:brown;" href="catering.html"><b>Catering</b></a></li>-->
					<li><a class="links" style="color:white;" href="online.html"><b>Online Ordering</b></a></li>
					<li><a class="links" style="color:white;" href="chef.html"><b>Chef</b></a></li>
					<li><a class="links" style="color:white;" href="contact.php"><b>Contact Us</b></a></li>
				</ul>

			</div>

		</nav>

	</div>

	<div id="anime1" class="ani1 fixed rev22">
		<span id="adai">&nbsp;&nbsp;Today's Spl&nbsp;&nbsp;</span>
	</div>
	<div id="anime3" class="ani3 fixed">
		<span id="adai1" class="animated infinite pulse rev21" style="color:brown">&nbsp;&nbsp;Briyani&nbsp;&nbsp;</span>
		<img id="adai2" class="animated infinite pulse rev20" src="Images/anime3.png">
	</div>
	<div id="anime2" class="ani2 fixed1 hvr-bob rev19" style="opacity: 1;">
		<img src="Images/anime2.png">
	</div>
	

	<div id="mySidenav1" class="sidenav" style="z-index:102;">
		<a href="javascript:void(0)" class="closebtn1" onclick="closeNav1()" style="z-index:108;">&times;</a>
		<a class="links" style="color:#00F3FF;" href="index.html" onclick="closeNav1()" style="z-index:106;"><b>Home</b></a>
		<a class="links" style="color:white;" href="menu.html" onclick="closeNav1()"><b>Menu</b></a>
		<a class="links" style="color:white;" href="online.html" onclick="closeNav1()"><b>Online Ordering</b></a>
		<a class="links" style="color:white;" href="chef.html" onclick="closeNav1()"><b>Chef</b></a>
		<a class="links" style="color:white;" href="contact.php" onclick="closeNav1()"><b>Contact Us</b></a>
		<br>
		
	</div>  
	
	<div class="rev15" style="padding-top:13px;top:0; left:0;">
		<div id="myCarousel" class="carousel slide" style="margin:auto;width:65%;border-radius:10px;" data-ride="carousel">
		<!-- Indicators -->
		<ol style="z-index:13;" class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

	<!-- Wrapper for slides -->
		<div class="carousel-inner" style="border-radius:10px;z-index:12;" role="listbox">
			<div style="z-index:9;" class="item active">
				<img src="Images\p1.jpg" alt="Image">
			</div>

			<div style="z-index:9;" class="item">
				<img src="Images\p2.jpg" alt="Image"> 
			</div>

			<div style="z-index:9;" class="item">
				<img src="Images\p3.jpg" alt="Image">
			</div>

			<div style="z-index:9;" class="item">
				<img src="Images\p4.jpg" alt="Image"> 
			</div>

		</div>

	<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" style="border-radius:10px;z-index:13;" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" style="border-radius:10px;z-index:13;" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
		
	</div>
	
	<div class="container text-center" style="background-color:rgba(0,0,0,0);padding-top:2%;padding-bottom:2%">    
		<h3 class="rev3" style="font-family:Bungasai;color:black;font-size:30px;"></h3>
		<div class="row" >
			<div class="col-sm-4">
			<h3 class="rev3" style="font-family:Bungasai;color:black;font-size:20px;padding-bottom:2%">Food Lovers</h3>
				<img src="Images\img1.png" class="img-responsive rev2" style="width:200px;height:200px;margin:auto;border-radius:5px;" alt="Image">
				
				<div class="well" style="background-color:#ffff28;border:none;">
				
					<p class="rev4" style="font-family:Bungasai;color:purple;font-size:18px;">When planning your perfect day, look no further than us. Food lovers beware...you're in for a tasty surprise that you'll never forget.</p>
					<a class="links rev5" style="color:brown;font-size:18px;text-decoration:none;" href="menu.html" target="_blank"><b><< Menu Peek >></b></a>
				</div>
			</div>
			<div class="col-sm-4">
<h3 class="rev7" style="font-family:Bungasai;color:black;font-size:20px;padding-bottom:2%">Meet Our Chef</h3>			
				<img src="Images\img2.jpg" class="img-responsive rev6" style="width:200px;height:200px;margin:auto;border-radius:5px;" alt="Image">
				   
				<div class="well" style="background-color:#ffff28;border:none;">
				
					<p class="rev8" style="font-family:Bungasai;color:purple;font-size:18px;">Food is my passion - my art is creating a delicious and surprising menu that will overwhelm your every sense.</p>
					<a class="links rev9" style="color:brown;font-size:18px;text-decoration:none;" href="chef.html"target="_blank"><b><< Know More >></b></a>
				</div>
			</div>
			<div class="col-sm-4">
<h3 class="rev11" style="font-family:Bungasai;color:black;font-size:20px;padding-bottom:2%">Say Hello</h3> 			
				<img class="rev10" src="Images\img3.jpg" class="img-responsive" style="width:200px;height:200px;margin:auto;border-radius:5px;" alt="Image">
				  
				<div class="well" style="background-color:#ffff28;border:none;">
				
					<p class="rev12" style="font-family:Bungasai;color:purple;font-size:18px;">We love to meet people who want to share their love of food at events, private parties and more. Drop us a line or give us a call.</p>
					<a class="links rev13" style="color:brown;font-size:18px;text-decoration:none;" href="contact.php"target="_blank"><b><< Contact Us >></b></a>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="rev13 foo" >
		<h4 style="font-size:18px;font-family:Bungasai;color:white;text-align:center;">Created by <a class="links" style="font-family:thundertitan;font-size:16px;color:black;text-decoration:none;">BROCODE</a></h4>
	</div>
	</footer>
	<script>
		//number of pixels before modifying styles

		function openNav1() {
			document.getElementById("mySidenav1").style.width = "250px";

		}

		/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
		function closeNav1() {
			document.getElementById("mySidenav1").style.width = "0";
		}

                       window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("myBtn").style.display = "block";
				} else {
					document.getElementById("myBtn").style.display = "none";
				}
			}

		$(document).ready(function(){
			$('.tophead').addClass('animated slideInUp');
		         $('#myBtn').on('click', function(e){
				$("html, body").animate({scrollTop: $("#top").offset().top}, 500);
			});

			$(window).bind('scroll', function () {
                                 
				if (window.innerWidth<=899&& $(window).scrollTop() > 10) {
					$('#fun').addClass('fixed');
				                                   
				}else{
					$('#fun').removeClass('fixed');
				}
				if($(window).scrollTop()>100){
					$('.ani2').css('opacity','0.1');
				}
				else {
					$('.ani2').css('opacity','1');
				}
                                   
				if ($(window).scrollTop() >100&&window.innerWidth>899) {
					$('.mast').addClass('fixed text-center');
				} else {
					$('.mast').removeClass('fixed text-center');
					$('.poda').css('display','none');
					
				}

                              if ($(window).scrollTop() >100&&window.innerWidth<750) {
					$('.ani3').css('display','none');
					$('.ani1').css('display','none');
				}else{
					$('.ani1').css('display','block');
				}
				if ($(window).scrollTop() > 150&& window.innerWidth>900) {
					$('.poda').css('display','block');

				}
				if (window.innerWidth<980) {
					$('.poda').css('font-size','16px');
					$('.poda').css('padding-top','15px');

				}
				if (window.innerWidth<1100 && window.innerWidth>981 ) {
					$('.poda').css('font-size','18px');
					$('.poda').css('padding-top','13px');

				}
				if (window.innerWidth>1100) {
					$('.poda').css('font-size','22px');
					$('.poda').css('padding-top','10px');
				}
                              
                                  
				// Changing the defaults
                                if (window.innerWidth>350) {
					sr.reveal('.rev1');
				sr.reveal('.rev2');
				sr.reveal('.rev3');
				sr.reveal('.rev4');
				sr.reveal('.rev5');
				sr.reveal('.rev6');
				sr.reveal('.rev7');
				sr.reveal('.rev8');
				sr.reveal('.rev9');
				sr.reveal('.rev10');
				sr.reveal('.rev11');
				sr.reveal('.rev12');
				sr.reveal('.rev13');
				sr.reveal('.rev14');
				sr.reveal('.rev15');
				sr.reveal('.rev16');
			        sr.reveal('.rev18');
				sr.reveal('.rev19');
				sr.reveal('.rev20');
				sr.reveal('.rev21');
				sr.reveal('.rev22');
				}

				


			});

jQuery(window).bind('orientationchange', function(e) {
 switch ( window.orientation ) {
  case 0:
    $('.turnDeviceNotification').css('display', 'none');
    // The device is in portrait mode now
  break;

  case 180:
    $('.turnDeviceNotification').css('display', 'none');
    // The device is in portrait mode now
  break;

  case 90:
    // The device is in landscape now
    $('.turnDeviceNotification').css('display', 'block');
  break;

  case -90:
    // The device is in landscape now
    $('.turnDeviceNotification').css('display', 'block');
  break;
 }
});
			
			$(".links").hover(function(){
				$(this).addClass("hvr-pulse");
				
			},function(){
				$(this).removeClass("hvr-pulse");
			});


			$("#anime1").hover(function(){
				$("#adai").css("color", "white");
				$("#anime3").css("display","block");
				$("#anime3").addClass("animated slideInRight");
				}, function(){
				$("#adai").css("color", "yellow");
				$("#anime3").addClass("animated slideOutRight");
				if(2/2== 1) {
				window.setTimeout(function() {
				$("#anime3").css("display","none");
				$("#anime3").removeClass("animated slideInRight");
				$("#anime3").removeClass("animated slideOutRight");
				// this will execute 1 second later
				}, 300);
				}
			});







		});



	</script>
	

	
</body>
</html>