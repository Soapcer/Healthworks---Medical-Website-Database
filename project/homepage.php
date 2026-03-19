<?php

session_start();
if(!isset($_SESSION['email'])){
    header("Location: index.php");
    exit();
}

$errors = [
    'inquiryError' => $_SESSION['inquiry_error'] ?? ''
];
unset($_SESSION['inquiry_error']); // Clear the message after showing

$successs = [
    'inquirySuccess' => $_SESSION['inquiry_submitted'] ?? ''
];
unset($_SESSION['inquiry_submitted']); // Clear the message after showing

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function showSuccess($success) {
    return !empty($success) ? "<p class='success-message'>$success</p>" : '';
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
    <link rel="stylesheet" href="homapagestyle.css">
</head>


<body>
    <!-- HEADER NAV BAR -->
    <div class="header" >
        <a href="#home-link"><img src="images\hworks.png" width="140px" height="auto" style="float: left;"></a>
        <nav>
        <a href="#home-link"><button id="Home">HOME</button></a>
        <a href="#challengesfaced-link"><button id="ChallengesFaced">CHALLENGES FACED</button></a>
        <a href="https://fundraise.unfoundation.org/give/412519/#!/donation/checkout" target="_blank"><button id="Donate">DONATE</button></a>   
        <a href="aboutus.php"><button id= "AboutUs">ABOUT US</button></a>
        <a href="profile.php"><button id="Profile">PROFILE</button></a>
        <button id="Logout" onclick="window.location.href='logout.php'">LOGOUT</button>
        </nav>
    </div>

    <!-- HOME INTERNAL LINK -->
	<p   id="home-link" style="padding-bottom: 0px; margin-top: -10px;">asd</p>

    <!-- WHO ARE WE, LEADS INTO ABOUT US -->
    <div  style="background-color: #93aaff; margin-top: 50px; margin-left: -10px; margin-right: -6px; height: 450px; border: 2px solid; border-color: #93aaff;">
        <img src = "images/hworks.png" width="450px" height="auto" style= "float: right; overflow : hidden; padding-top: 25px ; margin-right: 200px; margin-top: 45px;"  >
        <div style="margin-left: 200px; margin-top: 80px">
	        <h1>WHO ARE WE?</h1> 
            <p style="line-height:1.5; margin-top: -20px;"><b>HealthWorks</b> is a Non-Governmental Organization(NGO).<br> What this means is that we are a <b style="color: red;">non-profit organization</b><br> that operates independently from the government.<br> Founded in 2024, we plan to help the world overcome<Br> this SDG of <b>Good Health and Well-Being.</b></p>
	    </div>
    </div>

    <!-- OUR MISSION -->
    <div style="background-color: #f1f1f1; margin-right: -6px; margin-left: -10px; height: 550px; border: 2px solid; border-color: #f1f1f1;">
        <img src = "https://www.un.org/sustainabledevelopment/wp-content/uploads/2019/12/E_SDG_action_card_square_3-1024x1024.jpg" width="500px" height="auto" style= "float: left; overflow : auto; ; margin-top: 25px ; margin-left: 275px; border-radius:20px;">
	    <div style="margin-right: 100px; padding-top: 30px; float: right;">
            <h1>OUR MISSION</h1> 
            <p style="line-height:1.5; margin-top: -19px;">We plan to raise awareness about the 3rd goal of the Sustainable<br> Development Goals which is: <b style="color: #4ba146;">Good Health and Well-Being</b> and<br> the challenges this goal faces as a whole. We think that health is<br> a really important issue in the world right now. We want to do our<br> part in making the world a healthier place by listing out the<br> challenges faced by this goal and also organizing a program to<br> help people develop healthy habits.<br> <b  id="challengesfaced-link">Feel free to click the <b style="color:red; font-weight:900;">DONATE</b> button above to fund the cause.</b></p>
	    </div>
    </div>


     <!-- CHALLEGES FACED -->
     <div style="background-color: #ff5757; margin-left: -10px; margin-right: -6px; height: 500px; border: 2px solid; border-color: #ff5757;">
        <a href="https://sdgs.un.org/sites/default/files/2023-08/SDG_report_2023_infographics_Goal%203.jpg" target="_blank"><img src = "https://sdgs.un.org/sites/default/files/2023-08/SDG_report_2023_infographics_Goal%203.jpg" width="350px" height="auto" style= "float: right; overflow : auto; ; margin-top: 15px ; margin-right: 275px; border-radius: 20px;"></a>
	<div  style="margin-left: 200px; margin-top: 80px">
	<h1>SDG 3 AND THE CHALLENGES FACED</h1>
	<p style="line-height:1.5; margin-top: -19px;">Good Health and Well being aims to ensure healthy lives<br> and promote the well-being for all ages. However, with a<br> goal comes along its challenges, which includes: </p>	
	<ul id="ul" style="margin-left: 20px; margin-top: -10px;">
	<li>Out-of-pocket payments
	<li>Non-communicable diseases (NCD)
	<li>Pandemics and global health
	</ul>
	</div>	
    </div>
     
     <!-- Out of pocket payment -->
    <div style="background-color: #f1f1f1; margin-left: -10px; margin-right: -6px; height: 450px; border: 2px solid; border-color: #f1f1f1;">
	<img src="https://static.wixstatic.com/media/a10bf4_c282cff0331b4a7fad5513cd5227327f~mv2.jpg/v1/fill/w_740,h_494,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/a10bf4_c282cff0331b4a7fad5513cd5227327f~mv2.jpg" width="530px" height="auto" style="float: left; margin-top: 45px; margin-left: 260px; border-radius: 20px;">	        
	<div style="margin-right: 200px; margin-top: 50px; float: right;">
	<h1>  Out-of-pocket Payments </h1>
        <p>According to the 2023 SDGS report, around 381 million people<br> (4.9% of population) have been met with extreme poverty due<br> to otherworldly costs of modern medical problems. In addition<br> to the increasing prices of daily necessities, this issue will only<br> worsen as time goes on. <b>Healthcare should be accessible to<br> everyone, no matter where they are financially.</b></p>
	</div>
    </div>
     
     <!-- NCD -->
    <div style="background-color: #93aaff; margin-left: -10px; margin-right: -6px; height: 1280px; border: 2px solid; border-color: #93aaff;">
        
	<div style="margin-left: 200px; margin-top: 80px">
	<img src="https://www.indushealthplus.com/media/article_img/non-communicable-diseases-thumb.jpg" width="430px" height="auto" style="float: right; margin-top: 10px; margin-right: 300px; border-radius: 20px;">	
	<h1>NON-COMMUNICABLE DISEASES</h1> 
        <p style="line-height:1.5; margin-top: -19px;">Non-communicable diseases are concerningly common not just<br> in senior citizens, but adults and teenagers as well. This could be<br> because of various different reasons such as genetics, poor living<br> conditions, poor food choices, financial state and etc.</p> 
	
	<img src="https://static.vecteezy.com/system/resources/previews/017/113/039/non_2x/diabetes-prevention-logo-illustration-vector.jpg" width="270px" height="auto" style="float: right; margin-top: 10px; margin-right: 380px; border-radius: 20px;">
	<h1>DIABETES</h1>
	<p style="line-height:1.5; margin-top: -19px;">In 2022, 830 million people were living with diabetes, which is<br> 1 in 10 adults worldwide. This is an increase from 200 million in 1990.<br> There are various ways to prevent diabetes. For example, eating a<br> healthy diet, exercising regularly and getting enough sleep can<br> reduce the risk of diabetes.</p>
	
	<img src="https://www.discoveryvillages.com/wp-content/uploads/2022/09/severe-pain-low-angle-of-shocked-senior-man-shouting-and-touching-chest.jpg" width="430px" height="auto" style="float: right; margin-top: 10px; margin-right: 300px; border-radius: 20px;">
	<h1>STROKE</h1>
	<p style="line-height:1.5; margin-top: -19px;">Over 12 million people have a first stroke each year, and over<br> 100 million people have experienced a stroke in their lifetime.<br> Some ways to prevent strokes include keeping your blood<br> pressure below 120/80, keeping your cholesterol levels in the<br> normal range, limit alcohol consumption and etc.
</p>


	<img src="https://dailytrust.com/wp-content/uploads/2024/01/cancer.jpg" width="430px" height="auto" style="float: right; margin-top: 30px; margin-right: -435px; border-radius: 20px;">	
	<h1>CANCER</h1>
	<p style="line-height:1.5; margin-top: -19px;">Over 12 million people have a first stroke each year, and over<br> 100 million people have experienced a stroke in their lifetime.<br> Some ways to prevent strokes include keeping your blood<br> pressure below 120/80, keeping your cholesterol levels in<br> the normal range, limit alcohol consumption and etc.</p>
	</div>
    </div>

    <!-- AIDS -->
    <div style="background-color: #f1f1f1; margin-left: -10px; margin-right: -6px; height: 630px; border: 2px solid; border-color: #f1f1f1;">
        <img src = "https://upload.wikimedia.org/wikipedia/commons/6/64/Red_Ribbon.svg" width="350px" height="auto" style= "float: left; overflow : auto; ; margin-top: 55px ; margin-left: 275px; border-radius:20px;">

	<div style="margin-right: 150px; margin-top: 30px; float: right;">
	<h1>AIDS</h1> 
        <p style="line-height:1.5; margin-top: -19px;">Other than that, let's talk about AIDS. AIDS, or acquired<br> immunodeficiency syndrome, is the most advanced<br> stage of HIV infection. HIV is spread from the body fluids<br> of an infected person, including blood, breast milk, semen<br> and vaginal fluids. Most commonly, HIV is transmitted through<br> sexual intercourse. In order to prevent the spread of HIV, people<br> should be more responsible when performing copulation by<br> practicing safe sex. For example, people should go for medical<br> checkups beforehand and determine whether it is safe.<br> Ultimately, please be cautious before and while performing<br> intercourse.</p>
	</div>
    </div>

     <!-- INQUIRY -->
    <div style="background-color: #4ba146; margin-left: -10px; margin-right: -6px; margin-bottom: -10px; height: 400px; border: 2px solid; border-color: #4ba146;">
	    <div>
	        <a href="https://www.instagram.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/640px-Instagram_logo_2022.svg.png" width="40px" height="auto" style="margin-left: 1105px; margin-bottom: -280px;"></a>
	        <a href="https://www.facebook.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/220px-Facebook_f_logo_%282019%29.svg.png" width="40px" height="auto" style="margin-left: 0px; margin-bottom: -280px;"></a>
	        <a href="https://x.com/home" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/X_logo_2023.svg" width="40px" height="auto" style="margin-bottom: -280px;"></a>
	        <a href="https://www.youtube.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/2560px-YouTube_full-color_icon_%282017%29.svg.png" width="55px" height="auto" style="margin-left: 0px; margin-bottom: -280px;"></a>
	        <h3 id="oursocials">FOLLOW OUR SOCIALS.</h3>
	    </div>
	    <div style="margin-left: 200px;">
            <h1 style="color: white;" id="inquiry_link">INQUIRY</h1>
            <p style="margin-top: -78px; margin-left: 235px; color: white;" id="inquiry_link"> - ask us anything</p>
            <form action="submit_inquiry.php" method="POST" style="font-family: 'Montserrat'; font-weight: 500;">
                
                <label for = "email" style="color: white;"><b>Email:     </b></label> 
                <input type = "email" name = "iqEmail" placeholder = "name@email.com" id = "input">
                <br>
                <br>
                <label for = "inquiry" style="color: white;"><b>Inquire:  </b></label> 
                <br><br>
                <textarea name="inquiry" rows="8" cols="50" placeholder=" Ask us anything!" style="resize:none;"></textarea>
                <br>
                <button  type="Submit" name="iqSubmit" id="submit">SUBMIT</BUTTON>
            
            </form>
	    </div>
	<p class="copyright">&copy Copyright Healthworks SDN. BHD.<p>
        <?php echo showError($errors['inquiryError']);?>
        <?php echo showSuccess($successs['inquirySuccess']);?>
    </div>
</body>
 

</html>