<? $APPLICATION->IncludeComponent(
    "website96:forms",
    ".default",
    array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "FORM_BTN_OPEN" => "Fast order",
        "FORM_BTN_SUBMIT" => "Checkout",
        "FORM_FIELDS" => array(
            0 => "92",
            1 => "93",
            2 => "94",
            3 => "119",
            4 => "120",
        ),
        "FORM_REQUIRED_FIELDS" => array(
            0 => "93",
            1 => "94",
        ),
        "FORM_TITLE" => "Checkout",
        "IBLOCK_ID" => 34,
        "IBLOCK_TYPE" => "forms",
        "COMPONENT_TEMPLATE" => ".default",
        "FORM_BTN_TYPE" => "btn-default",
        "FORM_PRODUCT_ADD" => "Y",
        "FORM_POLITIC_URL" => "/politic/",
        "FORM_PRODUCT_ID" => $arParams['PRODUCT_ID'],
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO"
    ),
    false
); ?>