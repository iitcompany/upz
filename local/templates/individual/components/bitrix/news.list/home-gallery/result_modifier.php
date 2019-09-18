<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult['ITEMS']){
    foreach ($arResult['ITEMS'] as $key => $arItem){
        if($arItem['PROPERTIES']['IMG_MORE']['VALUE']) {
            $arImages = array();
            foreach ($arItem['PROPERTIES']['IMG_MORE']['VALUE'] as $k => $id) {
                $arImage = CFile::GetByID($id)->Fetch();
                $arImage['SRC'] = CFile::GetPath($id);
                $arImage['RESIZE_SRC'] = CFile::ResizeImageGet(
                    $id,
                    array(
                        'width' => 345,
                        'height' => 175
                    ), BX_RESIZE_IMAGE_EXACT,
                    true)['src'];
                $arImages[$k] = $arImage;
            }
        }
        $arResult['ITEMS'][$key]['PROPERTIES']['IMG_MORE']['VALUE'] = $arImages;
    }
}