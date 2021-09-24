<?php
/*
	FusionPBX
	Version: MPL 1.1

	The contents of this file are subject to the Mozilla Public License Version
	1.1 (the "License"); you may not use this file except in compliance with
	the License. You may obtain a copy of the License at
	http://www.mozilla.org/MPL/

	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.

	The Original Code is FusionPBX

*/

header('Access-Control-Allow-Origin: ' . $_SERVER['SERVER_NAME']);

//includes
require_once "root.php";
require_once "resources/require.php";
require_once "resources/check_auth.php";

//check permissions
if (permission_exists('tts_recording_add') || permission_exists('tts_recording_edit')) {
	//access granted
}
else {
	echo "access denied";
	exit;
}

//retrieve token
	$speech_service = new azure_speech_service;
	echo $speech_service->getToken();
?>