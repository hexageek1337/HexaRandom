<!DOCTYPE html>
<html>
<head>
	<title>HexaGeeks - Randomly Assembly</title>
<meta charset="utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="index, follow">
<meta name="description" content="HexaGeeks offers true random numbers to anyone on the Internet. The randomness comes from atmospheric noise, which for many purposes is better than the pseudo-random number algorithms typically used in computer programs.">
<meta name="keywords" content="random,randomness,randomless,number,numbers,random number,true random numbers">
<meta http-equiv="Copyright" content="Denny Septian">
<meta name="author" content="Denny Septian">
<meta http-equiv="imagetoolbar" content="no">
<meta name="language" content="Indonesia">
<meta name="revisit-after" content="7">
<meta name="webcrawlers" content="all">
<meta name="rating" content="general">
<meta name="spiders" content="all">
<meta property="og:image" content="https://www.phpindonesia.or.id/po-content/phpindo/images/cover-2.png">
<meta property="og:url" content="https://hexageek.000webhostapp.com">
<meta property="og:site_name" content="HexaGeeks Randomly">
<!-- Icon dan Image -->
<link href="https://www.google.co.id/images/branding/product/ico/googleg_lodp.ico" rel="shortcut icon">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Antic+Slab);

html,body {
  height:100%;
}

h1 {
  font-family: 'Antic Slab', serif;
  font-size:80px;
  color:#DDCCEE;
}

.lead {
	color:#DDCCEE;
	font-size: 20px;
}


/* Custom container */
.container-full {
  margin: 0 auto;
  width: 100%;
  min-height:100%;
  background-color:#110022;
  color:#eee;
  overflow:hidden;
}

.container-full a {
  color:#efefef;
  text-decoration:none;
}

.v-center {
  margin-top:7%;
}
.header1 {
	color: #fff;
}
</style>
</head>
<body>
<div class="container-full">
    <div class="row">
        <div class="col-lg-12 text-center v-center">
             <h1 class="header1">HexaGeeks</h1>

            <p class="lead">A randomly numberic and character.</p>
            <br />
            <br />
			<form class="col-lg-12" method="POST" action="">
				<div class="input-group" style="width:340px;text-align:center;margin:0 auto;">
					<input type="text" name="Email" class="form-control input-lg" title="Don't worry. We hate spam, and will not share your email with anyone." placeholder="Enter your email address">
					<span class="input-group-btn"><button name="sentmail" class="btn btn-lg btn-primary" type="submit" name="Submit">Subscribe</button></span>
				</div>
			</form>
<?php
## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "hexageek1337@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Subscribe Random";

# RESULT PAGE
$location = "thanks.php";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY
$body = "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##
if (isset($_POST['sentmail'])) {
mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
}
?>
        </div>
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-lg-12 text-center v-center" style="font-size:39pt;"><a href="#panelnumber" title="Random Number"><i class="fa fa-hand-o-down"></i></a> <a href="https://soundcloud.com/denny-septian-478972107" class=""><i class="fa fa-soundcloud"></i></a>  <a href="https://www.facebook.com/H3xagon.co.id" class=""><i class="fa fa-facebook"></i></a> 
            <a href="https://www.instagram.com/hexageek1337/" class=""><i class="fa fa-instagram"></i></a>  <a href="https://www.ubuntu.com/" class=""><i class="fa fa-linux"></i></a>  <a href="#panelchara" title="Random Character"><i class="fa fa-hand-o-down"></i></a>
        </div>
    </div>
    <br class="">
    <br class="">
    <br class="">
    <br class="">
</div>
<!-- /container full -->
<div class="container">
    <hr class="">
    <div class="row">
        <div class="col-md-4">
            <div id="panelnumber" class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="">Random Number</h3>
                </div>
                <div class="panel-body">
<form action="" method="POST">
<input name="qmin" type="text" id="inputqmin" class="form-control" placeholder="Min Number" required autofocus>
<br />
<input name="qmax" type="text" id="inputqmax" class="form-control" placeholder="Max Number" required>
<button name="generate" type="submit" id="myButton" data-loading-text="Loading..." class="btn btn-lg btn-primary btn-block" autocomplete="off">Generate</button>

<script>
  $('#myButton').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
  })
</script>
</form>
<br />
<div id="result" class="panel panel-primary">
	<div class="panel-heading">Result</div>
		<div class="panel-body">
<?php
if (isset($_POST['generate'])) {
$qmin = $_POST['qmin'];
$qmax = $_POST['qmax'];

echo rand($qmin, $qmax);
}
?>
		</div>
</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="panelchara" class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="">Random Character</h3>
                </div>
                <div class="panel-body">
<p style="text-align: center;">This Random Long 16 Character</p>
<p style="text-align: center;">( No Custom )</p>
<form name="inputchara" action="" method="POST">
<input type="text" name="nginputchara" hidden>
<button name="generateq" type="submit" id="myButton" data-loading-text="Loading..." class="btn btn-lg btn-primary btn-block" autocomplete="off">Generate</button>

<script>
  $('#myButton').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
  })
</script>
</form>
<br />
<div id="result" class="panel panel-primary">
	<div class="panel-heading">Result</div>
		<div class="panel-body">
<?php
$length = 16;
$lengthq = $length;
$alpha = "abcdefghijklmnopqrstuvwxyz";
$alpha_upper = strtoupper($alpha);
$numeric = "0123456789";
$special = ".-+=_,!@$#*%<>[]{}";
$chars = "";
 
if (isset($_POST['nginputchara'])){
  $chars = $alpha . $alpha_upper . $numeric . $special;
  $lengthq;
} else {
    // default [a-zA-Z0-9]{9}
    $chars = $alpha . $alpha_upper . $numeric;
    $length = 9;
}
 
$len = strlen($chars);
$pw = '';
 
for ($i=0;$i<$length;$i++)
        $pw .= substr($chars, rand(0, $len-1), 1);
 
// the finished password
$pwon = str_shuffle($pw);

if (isset($_POST['generateq'])) {
  echo $pwon;
}
?>
        </div>
</div>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-lg-12">
            <br class="">
            <br class="">
            <p class="pull-right">Copyright &#169; <?php echo date("Y");?> Denny Septian a.k.a H3xagon &#9829;</p>
            <br class="">
            <br class="">
        </div>
    </div>
</body>
</html>