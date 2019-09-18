<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */
if ($arResult['ITEMS']) {
    foreach ($arResult['ITEMS'] as $k => $arItem) {
        if ($arItem['PROPERTIES']['SOCIAL_ICON']['VALUE']) {
            $file = CFile::GetPath($arItem['PROPERTIES']['SOCIAL_ICON']['VALUE']);
            $arResult['ITEMS'][$k]['PROPERTIES']['SOCIAL_ICON']['VALUE'] = $_SERVER['DOCUMENT_ROOT'] . $file;
        }
    }
}