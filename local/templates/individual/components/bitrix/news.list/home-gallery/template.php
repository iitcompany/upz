<? use Bitrix\Main\Page\Asset;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/views/modules/header/' . $arParams['SETTING']['HEADER'] . '/style.css');
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

if($arResult['ITEMS']){
    foreach ($arResult['ITEMS'] as $k => $arItem){?>
    <section class="section-slider section-slider--photo">
        <div class="section-title">
            <div class="container">
                <div class="row justify-content-md-between justify-content-sm-start align-items-end align-items-md-center">
                    <div class="col-auto">
                        <h2><?= $arResult['NAME'] ?></h2>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slider-grid">
                        <?if($arItem['PROPERTIES']['IMG_MORE']['VALUE']) {?>
                            <div class="slider-box">
                                    <div class="slider-photo" data-arrows="true" data-dots="true">
                                        <?foreach ($arItem['PROPERTIES']['IMG_MORE']['VALUE'] as $arImage){?>
                                            <div class="slide-item slide-item__1"
                                                 style="background-image: url(<?=$arImage['SRC']?>)">
                                            </div>
                                        <?}?>
                                    </div>
                                    <?if(count($arItem['PROPERTIES']['IMG_MORE']['VALUE']) > 1){?>
                                        <div class="slider-dots slider-dots__1">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-auto">
                                                        <div class="slider-home-dots"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?}?>
                            </div>
                            <div class="slider-pics">
                                <?foreach ($arItem['PROPERTIES']['IMG_MORE']['VALUE'] as $arImage){?>
                                    <div class="slider-pic">
                                        <div class="slider-pic__image" style="background-image:url(<?=$arImage['RESIZE_SRC']?>)"></div>
                                    </div>
                                <?}?>
                            </div>
                        <?}?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?}
}?>
