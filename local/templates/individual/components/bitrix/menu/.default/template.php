<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();if (is_array($arResult['CHILDREN'])) {    ?>    <ul>        <? foreach ($arResult['CHILDREN'] as $arItem) {            ?>            <li class="<?= $arItem['SELECTED'] ? ' active ' : '' ?><?= $arItem['CHILDREN'] ? ' submenu ' : '' ?>">                <a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a>                <? if ($arItem['CHILDREN'] && $arParams['DEPTH_LEVEL'] > 1) { ?>                    <ul class="sub-submenu">                        <? foreach ($arItem['CHILDREN'] as $item) { ?>                            <li <?= $item['SELECTED'] ? 'class="active"' : '' ?>>                                <a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>                            </li>                        <? } ?>                    </ul>                <? } ?>            </li>        <? } ?>    </ul><?}?>