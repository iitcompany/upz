<?php/** * @author Danil Syromolotov <ds@itex.ru> */use Bitrix\Main\Localization\Loc;Loc::loadMessages(__FILE__);$arTemplateParameters = array(    'BLOCK_IMG' => array(        'PARENT' => 'BLOCK_PARAMETERS',        'TYPE' => 'FILE',        'NAME' => Loc::getMessage('IMAGE_IN_BLOCK_TITLE'),        "FD_TARGET" => "F",        "FD_EXT" => "jpg,jpeg,png,gif",        "FD_UPLOAD" => true,        "FD_USE_MEDIALIB" => true,        "FD_MEDIALIB_TYPES" => Array("image"),    ),    'BLOCK_DESCRIPTION' => array(        'PARENT' => 'BLOCK_PARAMETERS',        'TYPE' => 'CHECKBOX',        'NAME' => Loc::getMessage('SHOW_DESCRIPTION_BLOCK'),    ),    'BLOCK_URL' => array(        'PARENT' => 'BLOCK_PARAMETERS',        'TYPE' => 'STRING',        'NAME' => Loc::getMessage('LINK_DETAILS'),    ));