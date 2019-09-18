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
    <div class="vacancy__text">
        <?$APPLICATION->IncludeFile(
            "/include/" . SITE_ID . "/vacancy/section.php",
            array(
                "SETTING" => $arSetting
            ),
            array(
                "SHOW_BORDER" => true,
                "MODE" => "html"
            )
        );?>
    </div>
    <div class="vacancy__items">
        <?foreach ($arResult['ITEMS'] as $k => $arItem) {?>
            <div class="vacancy__item">
                <div class="vacancy__top">
                    <div class="vacancy__name"><?=$arItem['NAME']?></div>
                    <div class="vacancy__right">
                        <div class="vacancy__condition vacancy__condition--number">
                            <?if ($arItem['PROPERTIES']['VACANCY_PRICE']['VALUE']) {?>
                                <span class="vacancy__condition-total"><?=$arItem['PROPERTIES']['VACANCY_PRICE']['VALUE']?></span>
                            <?}?>
                        </div>
                        <button class="vacancy__btn">
                            <?=GetContentSvgIcon('open')?>
                        </button>
                    </div>
                </div>
                <div class="vacancy__bottom">
                    <div class="vacancy__line"></div>
                    <?if ($arItem['PROPERTIES']['VACANCY_REQUIREMENTS']['VALUE']) {?>
                        <div class="vacancy__block">
                            <div class="vacancy__title"><?=$arItem['PROPERTIES']['VACANCY_REQUIREMENTS']['NAME']?></div>
                            <ul class="vacancy__list">
                                <?foreach ($arItem['PROPERTIES']['VACANCY_REQUIREMENTS']['VALUE'] as $arValue) {?>
                                    <li><?=$arValue?></li>
                                <?}?>
                            </ul>
                        </div>
                    <?}?>
                    <?if ($arItem['PROPERTIES']['VACANCY_DUTIES']['VALUE']) {?>
                        <div class="vacancy__block">
                            <div class="vacancy__title"><?=$arItem['PROPERTIES']['VACANCY_DUTIES']['NAME']?></div>
                            <ul class="vacancy__list">
                                <?foreach ($arItem['PROPERTIES']['VACANCY_DUTIES']['VALUE'] as $value) {?>
                                    <li><?=$value?></li>
                                <?}?>
                            </ul>
                        </div>
                    <?}?>
                    <?if ($arItem['PROPERTIES']['VACANCY_PRICE']['VALUE']) {?>
                        <div class="vacancy__block">
                            <div class="vacancy__title"><?=$arItem['PROPERTIES']['VACANCY_PRICE']['NAME']?></div>
                            <div class="vacancy__info"><?=$arItem['PROPERTIES']['VACANCY_PRICE']['VALUE']?></div>
                        </div>
                    <?}?>
                    <? $APPLICATION->IncludeFile(
                        "/include/" . SITE_ID . "/vacancy_form.php",
                        array(), array(
                            "SHOW_BORDER" => false,
                            "MODE" => "text"
                        )
                    ); ?>
                </div>
            </div>
        <?}?>
    </div>
