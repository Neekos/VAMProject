<?php

return array(



	'def'=>'def/index',
	'about'=>'about/index',
	'price/view/([0-9]+)' => 'price/view/$1',
	
	'price'=>'price/index',
	'galereya'=>'galereya/index',
	'cabinet/delservice/([0-9]+)' =>'cabinet/delservice/$1',
	'cabinet/redservice/([0-9]+)' => 'cabinet/redservice/$1',
	'cabinet/cms' => 'cabinet/cms',

	'cabinet/diary' => 'cabinet/diary',
	'cabinet' => 'cabinet/index',
	'logout' => 'sign/logout',
	'signup' => 'sign/registration',
	'signin' => 'sign/login',
	'main'  => 'main/index',
	'' => 'main/index',


	


);

?>