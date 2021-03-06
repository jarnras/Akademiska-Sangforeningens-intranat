<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo lang(LANG_KEY_HEADER_LOGIN); ?></title>	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/desktop/libraries/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/desktop/libraries/jquery-ui.custom.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/desktop/libraries/jquery.multiselect.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/desktop/main.css" />
		
		<?php //TODO: Title som input från parenten? ?>
		<?php //<link rel="SHORTCUT ICON" href="img/favicon.png"> ?>
	</head>
	<body>
		<div id="container" class="ui-corner-all">
			<div>
				<div style="float: left">
					<h1><?php echo lang(LANG_KEY_HEADER_LOGIN); ?></h1>
				</div>
				<?php if ($this->session->userdata(SESSION_LOGGEDIN) == true) { ?>				
					<div style="float: right">
						<a href="<?php echo CONTROLLER_PERSONS_EDIT_MY_INFORMATION ?>" id="button_mysettings" class="button" data-icon="ui-icon-gear" data-formdialog="true"><?php echo $this->session->userdata(SESSION_NAME); ?></a>
						<a href="<?php echo CONTROLLER_LOGIN_LOGOUT ?>" id="logout" class="button" data-icon="ui-icon-circlesmall-close">Logga ut</a>				
					</div>
				<?php } ?>				
			</div>