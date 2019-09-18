<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();/** @var array $arResult *//** @var array $arParams *//** @var CBitrixComponentTemplate $this */// [section_id => [all parents ids]]$selectedItems = [];// [section_id => parent_section_id]$mapSectionIds = [];// [section_id => [all parents ids]]$mapSectionParentIds = [];$allSelectedItems = [];foreach ($arResult as $arItem) {    if ($arItem['SELECTED'] && isset($arItem['PARAMS']['ID'])) {        $selectedItems[$arItem['PARAMS']['ID']] = 1;    }    if (isset($arItem['PARAMS']['ID']) && array_key_exists('IBLOCK_SECTION_ID', $arItem['PARAMS'])) {        $mapSectionIds[$arItem['PARAMS']['ID']] = $arItem['PARAMS']['IBLOCK_SECTION_ID'];    }}$selectedDirectItemsId = $selectedItems;foreach ($mapSectionIds as $sectionId => $sectionParentId) {        $sectionsParent = [];    $parentId = $sectionParentId;    while (isset($parentId)) {                $sectionsParent[] = $parentId;        $parentId = isset($mapSectionIds[$parentId])            ? $mapSectionIds[$parentId]            : null;    }    $mapSectionParentIds[$sectionId] = $sectionsParent;    if (isset($selectedItems[$sectionId])) {        $selectedItems[$sectionId] = $sectionsParent;        $allSelectedItems = array_merge($allSelectedItems, $sectionsParent);    }    }if (!empty($allSelectedItems)) {    $allSelectedItems = array_flip($allSelectedItems);}foreach ($arResult as $key => $arItem) {    if (    isset(        $arItem['PARAMS']['ID'],        $allSelectedItems[$arItem['PARAMS']['ID']]    )    ) {        $arItem['SELECTED'] = true;        $arResult[$key] = $arItem;    }}unset($key, $arItem);// Generate hierarchical tree$map = [    0 => [        'CHILDREN' => []    ]];foreach ($arResult as &$arItem) {    $arItem['CHILDREN'] = [];    $map[$arItem['PARAMS']['ID']] = &$arItem;}foreach ($arResult as &$arItem) {    $map[(int)$arItem['PARAMS']['IBLOCK_SECTION_ID']]['CHILDREN'][] = &$arItem;}$arResultCopy = $arResult;$arResult = [    'CHILDREN' => $map[0]['CHILDREN'],    'SELECTED_DIRECT_IDS' => $selectedDirectItemsId,];$map = null;unset($map);