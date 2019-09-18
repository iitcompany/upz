<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */
?>
<div class="col-12 col-md-4 socicons">
    <? foreach ($arResult['ITEMS'] as $k => $arItem) { ?>
        <a class="icon__<? ?>" href="<?= $arItem['PROPERTIES']['SOCIAL_LINK']['VALUE'] ?>">
            <?= file_get_contents($arItem['PROPERTIES']['SOCIAL_ICON']['VALUE']); ?>
        </a>
    <? } ?>
</div>