<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();


/**
 * @var CMain $APPLICATION
 * @var string $headerContent
 */

use Bitrix\Main\Page\Asset;

$pageContent = ob_get_clean();
$pageContent = trim(implode("", $APPLICATION->buffer_content)) . $pageContent;
$APPLICATION->RestartBuffer();
ob_end_clean();

if (function_exists("getmoduleevents")) {
    foreach (GetModuleEvents("main", "OnLayoutRender", true) as $arEvent) {
        ExecuteModuleEventEx($arEvent);
    }
}

$pageLayout = $APPLICATION->GetPageProperty("PAGE_LAYOUT", AppGetCascadeDirProperties("PAGE_LAYOUT", "column1"));
$arLang = $APPLICATION->GetLang();
Asset::getInstance()->addCss($APPLICATION->GetTemplatePath("public/css/main.css"));
$pageTitle = $APPLICATION->GetPageProperty('title') ?: $APPLICATION->GetTitle(false);
?>
<!doctype html>
<html lang="<?= $arLang['LANGUAGE_ID'] ?>">
<head>
<meta name="google-site-verification" content="_X-iC0bZ7p16jyAnv7Y4I1UCbU78UKhoh9owx3o7e5k" />
<meta name="yandex-verification" content="6b275e1b78e746d9" />
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(53774236, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/53774236" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <base href="/">
    <link rel="shortcut icon" href="<?= SITE_DIR ?>favicon.ico">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?$APPLICATION->ShowHead(); ?>
    <title><?= $arLang["SITE_NAME"] ? $pageTitle . ' - ' . $arLang["SITE_NAME"] : $pageTitle ?></title>
</head>
<body class="app">

<?
//Подключения файла настроек шаблон
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/tools/settings.php';

if ($USER->IsAdmin()) {
    $APPLICATION->ShowPanel();
    if ($arSetting['SHOW_PANEL'] == 'Y') {

        echo '<button class="settings__panel-show"></button>';
    }
}
?>
<?
$APPLICATION->RestartWorkarea(true);
?>
<? $APPLICATION->IncludeFile(
    "views/modules/header_responsive.php",
    array(
        "SETTING" => $arSetting
    ),
    array(
        "SHOW_BORDER" => false,
        "MODE" => "php"
    )
); ?>
<? $APPLICATION->IncludeFile(
    "views/modules/header/" . $arSetting['HEADER'] . "/template.php",
    array(
        "SETTING" => $arSetting
    ),
    array(
        "SHOW_BORDER" => false,
        "MODE" => "php"
    )
); ?>
<? if ($APPLICATION->GetCurPage(false) == SITE_DIR) { ?>
    <? $APPLICATION->IncludeFile(
        "views/layouts/home.php",
        array(
            "CONTENT" => $pageContent,
            "SETTING" => $arSetting
        ),
        array(
            "SHOW_BORDER" => false,
            "MODE" => "php"
        )
    ); ?>
<? } else { ?>
    <? $APPLICATION->IncludeFile(
        "views/layouts/" . $pageLayout . ".php",
        array(
            "CONTENT" => $pageContent,
            "SETTING" => $arSetting
        ),
        array(
            "SHOW_BORDER" => false,
            "MODE" => "php"
        )
    ); ?>
<? } ?>
<? $APPLICATION->IncludeFile(
    "views/modules/footer/" . $arSetting['FOOTER'] . "/template.php",
    array(
        "SETTING" => $arSetting,
    ),
    array(
        "SHOW_BORDER" => false,
        "MODE" => "php"
    )
); ?>
<? if ($_COOKIE["confirm_fz152"] != 'y') { ?>
    <? $APPLICATION->IncludeComponent(
        "website96:inline.value",
        "fz152",
        array(
            "COMPONENT_TEMPLATE" => "fz152",
            "VALUE" => "Сайт использует файлы cookies и сервис сбора технических данных его посетителей.  Продолжая использовать данный ресурс, вы автоматически соглашаетесь с использованием данных технологий."
        ),
        false
    ); ?>
<? } ?>
<? $APPLICATION->IncludeFile(
    "views/scripts.php",
    array(
        "SETTING" => $arSetting,
    ),
    array(
        "SHOW_BORDER" => false,
        "MODE" => "php"
    )
); ?>
<? $APPLICATION->ShowBodyScripts(); ?>
</body>
</html>

