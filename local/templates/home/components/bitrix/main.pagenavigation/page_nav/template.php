<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();

$this->setFrameMode(true);
?>

<div class="row">
	<div class="col-md-12 text-center">
		<div class="site-pagination">
			<?if ($arResult["PAGE_COUNT"] > 1):?>
				<? if ($arResult["CURRENT_PAGE"]-1>2):?><a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate(1))?>">1</a><?endif?>
					<?if  ($arResult["CURRENT_PAGE"]-1>3):?><span>...</span><?endif?>
					<?while($arResult["START_PAGE"] <= $arResult["END_PAGE"]):?>
						<?if ($arResult["START_PAGE"] == $arResult["CURRENT_PAGE"]):?>
							<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["START_PAGE"]))?>" class="active"><?=$arResult["START_PAGE"]?></a>
						<?elseif ($arResult["CURRENT_PAGE"]<5 && $arResult["START_PAGE"]<6):?>
							<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["START_PAGE"]))?>"><?=$arResult["START_PAGE"]?></a>
						<?elseif ($arResult["CURRENT_PAGE"]>$arResult["PAGE_COUNT"]-4 && $arResult["START_PAGE"]>$arResult["PAGE_COUNT"]-5):?>
							<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["START_PAGE"]))?>"><?=$arResult["START_PAGE"]?></a>
						<?elseif (abs($arResult["CURRENT_PAGE"]-$arResult["START_PAGE"])<=1):?>
							<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["START_PAGE"]))?>"><?=$arResult["START_PAGE"]?></a>
						<?endif?>
						<?$arResult["START_PAGE"]++?>
					<?endwhile?>
					<?if  ($arResult["CURRENT_PAGE"]<$arResult["PAGE_COUNT"]-3):?><span>...</span><?endif?>
					<? if ($arResult["END_PAGE"]<$arResult["PAGE_COUNT"]):?><a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($arResult["PAGE_COUNT"]))?>"><?=$arResult["PAGE_COUNT"]?></a><?endif?>
			<?endif?>
		</div>
	</div>  
</div>