<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
    <div class="papers__text">
        <?$APPLICATION->IncludeFile(
            "/include/" . SITE_ID . "/papers/section.php",
            array(
                "SETTING" => $arSetting
            ),
            array(
                "SHOW_BORDER" => true,
                "MODE" => "html"
            )
        );?></div>
    <div class="papers__list">
        <?foreach ($arResult['ITEMS'] as $k => $arItem) {?>
            <div class="papers__item">
                <div class="papers__image">
                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
                </div>
                <div class="papers__info">
                    <div class="papers__date"><?=$arItem['NAME']?></div>
                    <?if ($arItem['PROPERTIES']['FILE']['VALUE']) {?>
                        <a href="<?=$arItem['PROPERTIES']['FILE']['VALUE']['SRC']?>"
                           class="papers__link" download><?=GetContentSvgIcon('pdf')?>
                            <?=$arItem['PROPERTIES']['FILE']['VALUE']['ORIGINAL_NAME']?></a>
                    <?}?>
                </div>
            </div>
        <?}?>
    </div>