<?php

session_start();
if(!isset($_SESSION['email'])){
    header("Location: index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang = "en">
<head>
<title></title>
<meta charset= "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@0;1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="aboutus.css">
</head>
<body>


    <!-- HEADER NAV BAR -->
    <div class="header" >
        <a href="homepage.php"><img src="images\hworks.png" width="140px" height="auto" style="float: left;"></a>
        <nav>
        <a href="homepage.php"><button id="Home">HOME</button></a>
        <a href="homepage.php#challengesfaced-link"><button id="ChallengesFaced">CHALLENGES FACED</button></a>
        <a href="https://fundraise.unfoundation.org/give/412519/#!/donation/checkout" target="_blank"><button id="Donate">DONATE</button></a>   
        <a href="aboutus.php"><button id= "AboutUs">ABOUT US</button></a>
        <a href="profile.php"><button id="Profile">PROFILE</button></a>
        <button id="Logout" onclick="window.location.href='logout.php'">LOGOUT</button>
        </nav>
    </div>
    
    <div  style="background-color: #93aaff; margin-top: 100px; margin-left: -10px; margin-right: -6px; height: 650px; border: 2px solid; border-color: #93aaff; text-align: center; color: black;">
        <div style="margin-top: 120px;">
	<h1 style="font-weight: 900; font-size: 50px;">ABOUT US</h1> 
            <P style="line-height:1.3;">Healthworks was founded in late 2024 by an independent team of 5 striving students<br> hoping to make the world a healthier and better place. We are based in Malaysia and currently<br> plan to branch out to other countries. The foundation of this website, <b style="color: lightgreen;">SDG "Good Health and Well-Being"</b><br> aims to increase public knowledge of infectious diseases like AIDS and malaria since the study found that<br> non-communicable diseases (NCDs) account for 63% of fatalities globally. Therefore, we have decided to<br> start this project to raise awareness regarding the ongoing health crisis globally. In addition, this topic also<br> resonates with us due to certain family members facing the same issues. Ultimately, we hope to make a difference<br> on not only the older generation, but also cultivating the practices of good health towards our future youths.</P>
	</div>
        </div>

<!-- BOTTOM SOCIALS -->
    <div style="background-color: #93aaff; margin-left: -10px; margin-right: -6px; margin-top: 10px; margin-bottom: -40px;height: 0px; border: 0px solid; border-color: #93aaff;">
	<div style="margin-left: 20px;">
	<a href="https://www.instagram.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/640px-Instagram_logo_2022.svg.png" width="40px" height="auto" style="margin-left: 830px; margin-bottom: -90px;"></a>
	<a href="https://www.facebook.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/220px-Facebook_f_logo_%282019%29.svg.png" width="40px" height="auto" style="margin-left: 0px; margin-bottom: -90px;"></a>
	<a href="https://x.com/home" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/X_logo_2023.svg" width="40px" height="auto" style="margin-bottom: -90px;"></a>	
	<a href="https://www.youtube.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/2560px-YouTube_full-color_icon_%282017%29.svg.png" width="55px" height="auto" style="margin-left: 0px; margin-bottom: -90px;"></a>
	<h3 id="oursocials" style = "text-align:center;">FOLLOW OUR SOCIALS.</h3>
	</div>
	<p class="copyright">&copy Copyright Healthworks SDN. BHD.<p>
     </div>
</body>
</html>