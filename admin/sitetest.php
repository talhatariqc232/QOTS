<?php

include "includes.php";
include "imadmintest.php";

Configuration::getControlPanel()->accessOrRedirect();

$results = imAdminTest::testWsx5Configuration();
 
if (isset($_POST['send'])) {
	$attachment = array();
	if (is_uploaded_file($_FILES['attachment']['tmp_name']) && file_exists($_FILES['attachment']['tmp_name'])) {
		$attachment = array(array(
			"name" => $_FILES['attachment']['name'],
			"mime" => $_FILES['attachment']['type'],
			"content" => file_get_contents($_FILES['attachment']['tmp_name'])
		));
	}
	$mailer = new ImSendEmail();
	if ($_POST['type'] == 'phpmailer' || $_POST['type'] == 'phpmailer-smtp') {
		$mailer->emailType = 'phpmailer';
		if ($_POST['type'] == 'phpmailer-smtp') {
			$mailer->use_smtp = true;
			$mailer->smtp_port = 465;
			$mailer->smtp_host = 'smtp.sendgrid.net';
			$mailer->smtp_encryption = 'ssl';
			$mailer->use_smtp_auth = true;
			$mailer->smtp_username = 'apikey';
			$mailer->smtp_password = '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';
		}					
	} else {
		$mailer->emailType = $_POST['type'];
	}
	$result = $mailer->send($_POST['from'], '', $_POST['to'], $_POST['subject'], strip_tags($_POST['body']), nl2br($_POST['body']), $attachment);

	// Save the test data for this session
	$_SESSION['form_test_type'] = $_POST['type'];
	$_SESSION['form_test_from'] = $_POST['from'];
	$_SESSION['form_test_to'] = $_POST['to'];
	$_SESSION['form_test_subject'] = $_POST['subject'];
	$_SESSION['form_test_body'] = $_POST['body'];
	$_SESSION['form_test_smtphost'] = 'smtp.sendgrid.net';
	$_SESSION['form_test_smtpport'] = 465;
	$_SESSION['form_test_smtpencryption'] = 'ssl';
	$_SESSION['form_test_smtpauth'] = @$_POST['smtpauth'];
	$_SESSION['form_test_smtpusername'] = 'apikey';
	echo "<script>window.top.location.href = 'sitetest.php?result=" . ($result ? 1 : 0) . "';</script>";
	exit();
}

// Load the main template
$mainT = Configuration::getControlPanel()->getMainTemplate();
$mainT->pagetitle = l10n('admin_test', 'Website Test');
$mainT->stylesheets = array("css/sitetest.css");
$mainT->content = "";
$contentT = new Template("templates/common/box.php");
$contentT->cssClass = "sitetest";
$contentT->content = "";

// Show the system tests
$testT = new Template("templates/sitetest/system-tests.php");
$testT->tests = $results;
$contentT->content .= $testT->render();

// Show the email form
$emailT = new Template("templates/sitetest/email-form.php");
$contentT->content .= $emailT->render();

// Read the log
$path = pathCombine(array("../", $imSettings['general']['public_folder'], "email_log.txt"));
if (file_exists($path) && function_exists("file_get_contents")) {
	$logT = new Template("templates/sitetest/log.php");
	$logT->log = file_get_contents($path);
	$contentT->content .= $logT->render();
}

$mainT->content = $contentT->render();
echo $mainT->render();
