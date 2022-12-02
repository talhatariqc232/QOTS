<?php
include("../res/x5engine.php");
$nameList = array("lwu","jj3","drj","ayk","h27","xs8","tmp","unj","4z5","wkh");
$charList = array("V","2","3","H","X","U","3","P","V","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
