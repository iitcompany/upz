<?
$APPLICATION->IncludeComponent(
	"website96:forms", 
	".default", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"FORM_BTN_OPEN" => "Быстрый заказ",
		"FORM_BTN_SUBMIT" => "Оформить заказ",
		"FORM_PRODUCT_ID" => $arParams["PRODUCT_ID"],
		"FORM_FIELDS" => array(
			0 => "21",
			1 => "22",
			2 => "23",
			3 => "115",
			4 => "116",
		),
		"FORM_REQUIRED_FIELDS" => array(
			0 => "22",
			1 => "23",
		),
		"FORM_TITLE" => "Оформление заказа",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "forms",
		"COMPONENT_TEMPLATE" => ".default",
		"FORM_BTN_TYPE" => "btn-default",
		"FORM_PRODUCT_ADD" => "Y",
		"FORM_POLITIC_URL" => "/politic/",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
); ?>