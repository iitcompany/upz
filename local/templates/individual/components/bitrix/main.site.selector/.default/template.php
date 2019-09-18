<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @author Lukmanov Mikhail <lukmanof92@gmail.com>
 */

?>
<?if (is_array($arResult['SITES']) && count($arResult['SITES']) > 1){?>
    <div class="header-language">
        <select name="LANGUAGE" class="header-language__select" id="selectLanguage" onchange="location = this.dataset.link;">
            <? foreach ($arResult['SITES'] as $arSite) { ?>
                <option value="<?= strtoupper($arSite['LANG']) ?>"
                        data-link="<?= $arSite['DIR'] ?>"
                    <?= $arSite['CURRENT'] == 'Y' ? 'selected' : '' ?>><?= strtoupper($arSite['LANG']) ?>
                </option>
            <? } ?>
        </select>
    </div>
<?}?>