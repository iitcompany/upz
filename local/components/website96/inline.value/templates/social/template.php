<div class="col-12 col-md-4 socicons">
    <? if ($arParams['VK']) { ?>
        <a class="icon__vk" href="<?= $arParams['VK'] ?>"><?= GetContentSvgIcon('vk'); ?></a>
    <? } ?>
    <? if ($arParams['FB']) { ?>
        <a class="icon__fb" href="<?= $arParams['FB'] ?>"><?= GetContentSvgIcon('fb'); ?></a>
    <? } ?>
    <? if ($arParams['IN']) { ?>
        <a class="icon__in" href="<?= $arParams['IN'] ?>"><?= GetContentSvgIcon('ig') ?></a>
    <? } ?>
    <? if ($arParams['TW']) { ?>
        <a class="icon__twitter" href="<?= $arParams['TW'] ?>"><?= GetContentSvgIcon('tw'); ?></a>
    <? } ?>
</div>