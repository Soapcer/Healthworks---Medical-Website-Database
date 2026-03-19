<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Get current user's data from database
$email = $_SESSION['email'];
$result = $conn->query("SELECT * FROM users WHERE email = '$email'");

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit();
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <title></title>
    <meta charset= "UTF-8" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
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



    <div class="profile-section" style="margin-top: 140px;">
        <div style="padding-top: 1px;">
	    <h1 style="padding-top:10px; padding-bottom: 20px;"><?= $_SESSION['name']?>'s Profile</h1>

        <form class="profile-form" action="profile_update.php" method="post" style="font-family: 'montserrat'; font-weight:400; margin-top:-20px;">
         <label>Name:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required><br>

            <label>Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required><br>

            <label>New Password (leave blank to keep old one):</label>
            <input type="password" name="password"><br><br>
            <button type="submit" name="update" value="Update Profile">UPDATE</button>
        </form>	

            <p class="footer" style="padding-top: 10px">By signing up, you agree to our <a href="#"><u>Privacy Policy</u></a> and <a href="#"><u>Terms of Service</u></a>.</p>
        </div>

    </div>



<!-- BOTTOM SOCIALS -->
    <div style="background-color: #93aaff; margin-left: -10px; margin-right: -6px; margin-top: 10px; margin-bottom: -40px;height: 250px; border: 2px solid; border-color: #93aaff;">
	<div style="margin-left: 20px;">
	<a href="https://www.instagram.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/640px-Instagram_logo_2022.svg.png" width="40px" height="auto" style="margin-left: 830px; margin-bottom: -200px;"></a>
	<a href="https://www.facebook.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/220px-Facebook_f_logo_%282019%29.svg.png" width="40px" height="auto" style="margin-left: 0px; margin-bottom: -200px;"></a>
	<a href="https://x.com/home" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/X_logo_2023.svg" width="40px" height="auto" style="margin-bottom: -200px;"></a>	
	<a href="https://www.youtube.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/2560px-YouTube_full-color_icon_%282017%29.svg.png" width="55px" height="auto" style="margin-left: 0px; margin-bottom: -200px;"></a>
	<h3 id="oursocials" style = "text-align:center;">FOLLOW OUR SOCIALS.</h3>
	</div>
	<p class="copyright">&copy Copyright Healthworks SDN. BHD.<p>
     </div>
</body>

</html>