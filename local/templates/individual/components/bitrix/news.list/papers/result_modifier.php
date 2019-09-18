<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult['ITEMS']){
    foreach ($arResult['ITEMS'] as $key => $arItem){
        if($arItem['PREVIEW_PICTURE']['SRC']){
            $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = CFile::ResizeImageGet(
                $arItem['PREVIEW_PICTURE'],
                array(
                    'width' => 276,
                    'height' => 389
                ), BX_RESIZE_IMAGE_EXACT,
                true)['src'];
        } else {
            $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = SITE_TEMPLATE_PATH.'/public/images/noPhoto.png';
            $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['ALT'] = 'Изображение отсутствует';
            $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['TITLE'] = 'Изображение отсутствует';
        }
        if ($arItem['PROPERTIES']['FILE']['VALUE']) {
            $arFile = CFile::GetByID($arItem['PROPERTIES']['FILE']['VALUE'])->Fetch();
            $arFile['SRC'] = CFile::GetPath($arItem['PROPERTIES']['FILE']['VALUE']);
            $arResult['ITEMS'][$key]['PROPERTIES']['FILE']['VALUE'] = $arFile;
        }
    }
}