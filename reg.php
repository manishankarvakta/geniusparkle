<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "geniusparkle";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    // collect data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $day = $_POST["dobDay"];
    $month = $_POST["dobMonth"];
    $year = $_POST["dobYear"];
    $pass = md5($_POST["password"]);

    $sql = "INSERT INTO `users` (`name`, `email`, `day`, `month`, `year`, `pass`) VALUES ('{$name}', '{$email}', '{$day}', '{$month}', '{$year}', '{$pass}')";

    if ($conn->query($sql) === TRUE) {
    
    //   echo "New records created successfully";
    } else {
    //   echo "Error: " . $sql . "<br>" . $conn->error;
      echo "Error Creating your Account!";
    die();
    }
}



$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>GeniuSparkle</title>
<meta name="description" content="This is description">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Favicons -->
<!--<link rel="icon" type="image/x-icon" href="Images/Favicon.ico" />-->
<link rel="icon" type="image/svg+xml" href="Images/Favicon.svg">
<!-- End Favicons -->
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- End Google Fonts -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- End jQuery -->
<!-- React -->
<!--<script src="//unpkg.com/systemjs@0.19.47/dist/system.js"></script>-->
<!--<script src="Assets/config.js"></script>-->
<!-- End React -->
<link rel="stylesheet" href="css/style.css">
<!--<script src="Assets/Script.js"></script>-->

</head>
<body>
<header data-cntnr="xl">
<a href="/">
<svg class="" id="logo" style="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.4666666 8.4666661"><path d="M 6.1760929,0.06615061 A 0.59383805,0.59383805 0 0 0 6.1068657,0.07038342 0.59383805,0.59383805 0 0 0 5.5879446,0.73069792 0.59383805,0.59383805 0 0 0 6.2482594,1.2496188 0.59383805,0.59383805 0 0 0 6.7671805,0.5892689 0.59383805,0.59383805 0 0 0 6.1760926,0.06614765 Z M 4.1304015,0.92154649 c -1.327349,0 -2.3315932,1.02169121 -2.3315932,2.32284331 0,1.2924297 1.0042442,2.3228788 2.3315932,2.3228788 1.3360926,0 2.3403429,-1.0304491 2.3403429,-2.3228788 0,-1.3011521 -1.0042503,-2.32284331 -2.3403429,-2.32284331 z m 0,1.06524581 c 0.7422706,0 1.2051,0.5675864 1.2051,1.2574578 0,0.6898782 -0.4628294,1.2575276 -1.2051,1.2575276 -0.7335339,0 -1.1963502,-0.5676494 -1.1963502,-1.2575276 0,-0.6898714 0.4628163,-1.2574578 1.1963502,-1.2574578 z M 1.980205,5.9447969 c -0.1664706,0 -0.3033194,0.1355612 -0.2829271,0.3006713 0.093679,0.758497 0.5380173,1.4387057 1.2094397,1.8263564 0.7590937,0.4382612 1.6968839,0.4382612 2.4559776,0 C 6.0341244,7.6841739 6.478569,7.0039652 6.5722749,6.2454682 6.5926741,6.0803581 6.4558184,5.9447969 6.2893478,5.9447969 H 5.7560772 c -0.1664638,0 -0.2980433,0.1370259 -0.3355297,0.2988512 -0.081482,0.3517958 -0.3049486,0.658896 -0.6258413,0.8441612 -0.4091465,0.2362214 -0.9107132,0.2362214 -1.3198596,0 C 3.1539606,6.9025441 2.9304864,6.5954439 2.8490052,6.2436481 2.8115188,6.0818228 2.6799812,5.9447969 2.5135106,5.9447969 Z"/></svg></a>
  <nav>
    <a href="#">Why Choose Us?</a>
    <a href="/Pricing">Pricing</a>
    <a href="#">For Parents</a>
    <a href="#">For Business</a>
  </nav>
  <div id="nav-cta-menu-btn">
    <div id="nav-menu-btn">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
</header>
<script>
var navCta = '<div id="nav-cta"><a data-btn="s" href="/Sign-In">Log In</a><a data-btn="p" href="/Sign-Up">Join Now</a></div>';
$("nav").append(navCta);
$("#nav-menu-btn").before(navCta);
  
var navOpn = false;
$("#nav-menu-btn").click(function() {
  if (!navOpn) {
    $("#nav-menu-btn div").css("transition", "top 200ms ease 0s, opacity 200ms ease 0s, transform 200ms ease 200ms, -webkit-transform 200ms ease 200ms");
    $("#nav-menu-btn div:nth-of-type(1)").css({"top": "6px", "transform": "rotate(45deg)"});
    $("#nav-menu-btn div:nth-of-type(3)").css({"top": "-6px", "transform": "rotate(135deg)"});
    $("#nav-menu-btn div:nth-of-type(2)").css("opacity", "0");
    navOpn = true;
  } else {
    $("#nav-menu-btn div").css({"transition": "top 200ms ease 200ms, opacity 200ms ease 200ms, transform 200ms ease 0s, -webkit-transform 200ms ease 0s", "top": "0px", "opacity": "1", "transform": "rotate(0deg)"});
    navOpn = false;
  }
  $("nav").fadeToggle("fast");
});

$(window).resize(function() {
  if ($(window).width() >= 1200) {
    $("nav").css("display", "flex");
  } else {
    $("nav").css("display", "block");
    if (!navOpn) {
      $("nav").hide(0);
    } else {
      $("nav").show(0);
    }
  }
});
</script><section data-cntnr="md" data-pdg="xl">
  <h1 data-pdg="-sm"><span data-bg-anim="primary">Welcome!</span></h1>
  <p data-pdg="-md" class="xl">
    Hi <?php echo $name?>,
  </p>
  <p data-pdg="-md" class="xl">
    Thank you for signing up! <br>
 
    No you can login using email <b><?php echo $email?></b>
    <br>
    And your Provided Password!
  </p>
  <!-- <form id="email-verif" action="Sign-Up" method="post">
    <div data-input="txt">
      <label style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr; grid-gap: 0 12px;">
        <input type="number" name="vnum1" required minln="1" maxln="1">
      </label>
      <div class="help">
        Resend Code
      </div>
      <div class="error empty">
        Please enter your code
      </div>
      <div class="error invalid">
        Please enter your code
      </div>
    </div>-->
    <a href="sign-In.php" data-btn="p" data-pdg="lg-">Login</a>
  <!--  </form> -->
</section><footer data-cntnr="xl" data-pdg="md">
<div style="display: flex; flex-flow: row nowrap; align-items: center; justify-content: space-between;">
  <a href="/">
<svg class="" id="" style="fill: var(--clr-primary); height: 64px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8.4666666 8.4666661"><path d="M 6.1760929,0.06615061 A 0.59383805,0.59383805 0 0 0 6.1068657,0.07038342 0.59383805,0.59383805 0 0 0 5.5879446,0.73069792 0.59383805,0.59383805 0 0 0 6.2482594,1.2496188 0.59383805,0.59383805 0 0 0 6.7671805,0.5892689 0.59383805,0.59383805 0 0 0 6.1760926,0.06614765 Z M 4.1304015,0.92154649 c -1.327349,0 -2.3315932,1.02169121 -2.3315932,2.32284331 0,1.2924297 1.0042442,2.3228788 2.3315932,2.3228788 1.3360926,0 2.3403429,-1.0304491 2.3403429,-2.3228788 0,-1.3011521 -1.0042503,-2.32284331 -2.3403429,-2.32284331 z m 0,1.06524581 c 0.7422706,0 1.2051,0.5675864 1.2051,1.2574578 0,0.6898782 -0.4628294,1.2575276 -1.2051,1.2575276 -0.7335339,0 -1.1963502,-0.5676494 -1.1963502,-1.2575276 0,-0.6898714 0.4628163,-1.2574578 1.1963502,-1.2574578 z M 1.980205,5.9447969 c -0.1664706,0 -0.3033194,0.1355612 -0.2829271,0.3006713 0.093679,0.758497 0.5380173,1.4387057 1.2094397,1.8263564 0.7590937,0.4382612 1.6968839,0.4382612 2.4559776,0 C 6.0341244,7.6841739 6.478569,7.0039652 6.5722749,6.2454682 6.5926741,6.0803581 6.4558184,5.9447969 6.2893478,5.9447969 H 5.7560772 c -0.1664638,0 -0.2980433,0.1370259 -0.3355297,0.2988512 -0.081482,0.3517958 -0.3049486,0.658896 -0.6258413,0.8441612 -0.4091465,0.2362214 -0.9107132,0.2362214 -1.3198596,0 C 3.1539606,6.9025441 2.9304864,6.5954439 2.8490052,6.2436481 2.8115188,6.0818228 2.6799812,5.9447969 2.5135106,5.9447969 Z"/></svg>  </a>
  <div class="lang-btn">
    <svg width="14" height="14" fill="none" style="margin: 6px 8px 0 0;" xmlns="http://www.w3.org/2000/svg"><path d="M3.88889 4.66667h.00778-.00778zm3.11111 0h.00778H7zm3.1111 0h.0078-.0078zM4.66667 9.33333H1.55556c-.41256 0-.808225-.16388-1.099948-.45561C.163888 8.586 0 8.19034 0 7.77778V1.55556C0 1.143.163888.747335.455612.455612.747335.163888 1.143 0 1.55556 0H12.4444c.4126 0 .8083.163888 1.1.455612C13.8361.747335 14 1.143 14 1.55556v6.22222c0 .41256-.1639.80822-.4556 1.09994-.2917.29173-.6874.45561-1.1.45561H8.55556L4.66667 13.2222V9.33333z" fill="var(--clr-secondary)"/><circle cx="4.66667" cy="4.66667" r="1.16667" fill="var(--clr-secondary-dark)"/><circle cx="9.33329" cy="4.66667" r="1.16667" fill="var(--clr-secondary-dark)"/>
    </svg>
    <span class="current-lang">English</span>
    <div class="drop-down-icon"></div>
  </div>
</div>
<div class="links">
  <div>
    <span>General</span>
    <a href="/Homepage">Homepage</a>
    <a href="">Why Choose Us?</a>
    <a href="">For Parents</a>
    <a href="">For Business</a>
  </div>
  <div>
    <span>Company</span>
    <a href="/Pricing">Pricing</a>
    <a href="">Branding</a>
    <a href="">About</a>
  </div>
  <div>
    <span>Help</span>
    <a href="">Contact Us</a>
    <a href="">FAQ</a>
    <a href="">Feedback</a>
  </div>
  <div>
    <span>Legal</span>
    <a href="">Privacy Policy</a>
    <a href="">Terms of Use</a>
    <a href="">Copyright Policy</a>
  </div>
  <div class="social-media-links">
    <span>Social Media</span>
    <div>
    <a href="https://www.facebook.com/GeniuSparkle/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.458334 26.458473"><path d="M16.157645 5.2008736c-3.03768 0-5.01933 1.84488-5.01933 5.1769404v2.93265H7.7571245v3.84989h3.3811905v9.29812h4.19303l-.005-.003v-9.29762h3.10007l.56274-3.8499h-3.68763v-2.49391c0-1.0494604.51255-2.0794604 2.16265-2.0794604h1.68106v-3.27422s-1.52493-.25993-2.98744-.25993z"/></svg></a>
    <a href="https://twitter.com/GeniuSparkle/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.458334 26.458334"><path d="M17.035392 6.1295619c-2.40517 0-4.17203 2.24581-3.62873 4.5759401-3.09512-.15513-5.8402798-1.6392001-7.6780798-3.8927901-.97583 1.67455-.50615 3.8643501 1.15239 4.9738791-.60986-.0251-1.18361-.18518-1.68518-.46046-.0409 1.72461 1.19433 3.34367 2.98588 3.69901-.5242.1401-1.09736.17005-1.68103.06.47347 1.47984 1.84827 2.52579 3.47935 2.58588-1.56602 1.22814-3.53822 1.77879-5.5144 1.54358 1.6486 1.05598 3.60736 1.67431 5.7107698 1.67431 6.91653 0 10.82371-5.84115 10.58799-11.0809591.72774-.52649 1.35832-1.1824 1.85777-1.9291-.66815.29228-1.38488.49247-2.13836.58756.76935-.46141 1.36035-1.19208 1.63761-2.06187-.71935.42389-1.5168.73919-2.36574.90432-.67866-.72666-1.64897-1.17719-2.72024-1.17719z"/></svg></a>
    <a href="https://www.youtube.com/c/GeniuSparkle/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.458334 26.458334"><path d="M13.229145 6.5680292s-5.9515396.00016-7.4357196.39791c-.81886.21886-1.46373.86373-1.68259 1.68259-.39759 1.4841798-.39738 4.5805998-.39738 4.5805998s-.00021 3.09655.39738 4.5806c.21886.81883.86373 1.46375 1.68259 1.68259 1.48418.39775 7.4357196.39788 7.4357196.39791 0 0 5.95103-.00016 7.43521-.39791.81883-.21884 1.46373-.86376 1.68259-1.68259.39775-1.48405.39791-4.5806.39791-4.5806s-.00016-3.09642-.39791-4.5805998c-.21886-.81886-.86376-1.46373-1.68259-1.68259-1.48418-.39775-7.43521-.39791-7.43521-.39791zm-1.90323 3.8064798l4.9444 2.85462-4.9444 2.85512z"/></svg></a>
    <a href="https://www.reddit.com/r/GeniuSparkle/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.458334 26.458334"><path d="M18.754658 5.2423566c-.53676 0-1.01055.31533-1.23145.77308l-3.20445-.6785c-.0948-.0159-.18941.00014-.2527.0476-.0788.0474-.12652.12594-.14211.22064l-.97927 4.6090394c-2.05211.0633-3.8991397.67876-5.2410297 1.64174-.34719-.33153-.82063-.53639-1.34152-.53639-1.07344 0-1.92598.86778-1.92598 1.92545 0 .78907.47353 1.45232 1.13689 1.75236-.0317.18921-.0476.37859-.0476.58394 0 2.96722 3.45755 5.38263 7.7199397 5.38263 4.26249 0 7.71943-2.39956 7.71943-5.38263 0-.18947-.0159-.39473-.0476-.58394.66305-.30004 1.13636-.97925 1.13636-1.76837 0-1.07331-.8686-1.92548-1.92651-1.92548-.5208.00003-.99433.20482-1.34152.53642-1.3259-.94721-3.14184-1.56244-5.16247-1.64124l.88419-4.1356694 2.87321.61547c.0317.72615.63135 1.31051 1.37356 1.31051.75774 0 1.37303-.61566 1.37303-1.37356 0-.75763-.61529-1.37305-1.37303-1.37305zm-8.5566 7.9865994c.75774 0 1.37356.61593 1.37356 1.37356 0 .75771-.61582 1.37306-1.37356 1.37306-.7579797.0156-1.3730297-.61535-1.3730297-1.37306 0-.75763.61505-1.37356 1.3730297-1.37356zm6.06219.0159c.758 0 1.37356.61534 1.37356 1.37305 0 .74187-.61556 1.37303-1.37356 1.37303-.75777 0-1.37359-.61539-1.37359-1.37303 0-.75771.61582-1.37305 1.37359-1.37305zm-6.03065 4.392c.0907 0 .18169.0355.2527.10644.60005.59981 1.86278.8046 2.76263.8046.89979 0 2.179-.20479 2.76312-.8046.14216-.14179.36274-.14179.50488 0 .12628.14195.12628.36336 0 .50538-.94716.94716-2.74723 1.01029-3.268 1.01029-.53671 0-2.33585-.0792-3.2674997-1.01029-.1419-.14202-.1419-.36343 0-.50538.0711-.0708.1613697-.10644.2521697-.10644z"/></svg></a>
    <a href="https://geniusparkle.quora.com/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.458334 26.458334"><path d="M12.968264 4.5929973c-4.1299903 0-8.1747003 3.29398-8.1747003 8.1297497 0 4.79337 4.04471 8.09087 8.1747003 8.08786.71509-.003 1.42661-.0971 2.1172-.28266v-.003c.81018 1.38891 1.89185 2.57453 3.93568 2.57453 3.37341 0 3.74893-3.10801 3.67831-3.85611h-1.20869c-.065.56178-.43731 1.27849-1.36324 1.27849-.84971 0-1.48749-.58947-2.05206-1.4759 1.96734-1.50471 3.11267-3.84691 3.09126-6.32362 0-4.8554997-4.00071-8.1297497-8.19846-8.1297497zm-.0589 1.63452c3.14759 0 4.49429 2.18479 4.49429 6.4926297 0 1.72765-.22595 3.12029-.70022 4.15065-.80174-1.20822-1.8099-2.15386-3.77187-2.15386-1.23362 0-2.21612.40894-2.82308.9312l.49972.99941c.26858-.11144.55674-.1668.84749-.16381 1.46793 0 2.22157 1.27855 2.86237 2.54043l-.06-.005c-.43916.122-.89303.18068-1.34874.17468-3.0996203 0-4.4410903-2.1934-4.4410903-6.47301 0-4.2795797 1.33583-6.4926097 4.4410903-6.4926097z"/></svg></a>
    </div>
  </div>
</div>
<div style="font-size: 16px; font-weight: 300; color: var(--clr-secondary);">Copyright &#169; 2021 GeniuSparkle</div>
</footer></body>
</html>