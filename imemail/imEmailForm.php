<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Your name', @$_POST['imObjectForm_41_1'], '', false);
	$form->setField('Your e-mail', @$_POST['imObjectForm_41_2'], '', false);
	$form->setField('Title', @$_POST['imObjectForm_41_3'], '', false);
	$form->setField('Your message', @$_POST['imObjectForm_41_4'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '999F5E2F6964777A767AF5B160CA5578' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('noreply@talha-t.websitex5.me', '', 'jackie@queenofthesweets.com', '', "", false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file