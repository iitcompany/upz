<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();$module_id = "website.template";CModule::IncludeModule($module_id);$CWb = new CWebsiteTemplate('file');$CWb->load();$CWb->loadCss();$arSetting = $CWb->settings;require_once $_SERVER['DOCUMENT_ROOT'] . '/local/tools/id_blocks.php';$arSetting['ID_BLOCKS'] = $arBlocks;