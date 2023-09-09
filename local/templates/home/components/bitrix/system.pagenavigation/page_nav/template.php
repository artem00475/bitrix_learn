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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
<? if ($arResult["NavPageNomer"]-1>2):?><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1">1</a><?endif?>
<?if  ($arResult["NavPageNomer"]-1>3):?><span>...</span><?endif?>
<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>
	<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>" class="active"><?=$arResult["nStartPage"]?></a>
	<?elseif ($arResult["NavPageNomer"]<5 && $arResult["nStartPage"]<6):?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
	<?elseif ($arResult["NavPageNomer"]>$arResult["NavPageCount"]-4 && $arResult["nStartPage"]>$arResult["NavPageCount"]-5):?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
	<?elseif (abs($arResult["NavPageNomer"]-$arResult["nStartPage"])<=1):?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
	<?endif?>
	<?$arResult["nStartPage"]++?>
<?endwhile?>
<?if  ($arResult["NavPageNomer"]<$arResult["NavPageCount"]-3):?><span>...</span><?endif?>
<? if ($arResult["nEndPage"]<$arResult["NavPageCount"]):?><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=$arResult["NavPageCount"]?></a><?endif?>

</div>
</div>  
</div>