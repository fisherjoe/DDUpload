<?php

if($_FILES['file_upload']['error']==0){
	 $uploadFileName=$_FILES['file_upload']['name'];
	 $uploadFileTemp=$_FILES['file_upload']['tmp_name'];
	 //$uploadFileTrue=$_SERVER['DOCUMENT_ROOT'].'/test/upload_drag_drop/tita/upload/';//ipace
	 $uploadFileTrue=$_SERVER['DOCUMENT_ROOT'].'/upload_drag_drop/tita/upload/';
	 move_uploaded_file($uploadFileTemp,$uploadFileTrue.$uploadFileName);
 }