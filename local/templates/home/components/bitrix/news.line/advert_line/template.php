<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="site-section site-section-sm bg-light">
		<div class="container">
			<div class="row mb-5">
				<div class="col-12">
					<div class="site-section-title">
						<h2><?=GetMessage("ADVERT_TITLE")?></h2>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
				<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="col-md-6 col-lg-4 mb-4">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
						<figure>
							<img src="<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?><?=$arItem["PREVIEW_PICTURE"]["SRC"]?><?endif?>" alt="Image" class="img-fluid">
						</figure>
						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$<?=$arItem["PROPERTY_COST_VALUE"]?></span>
								<h3 class="title"><?=$arItem["NAME"]?></h3>
								<p class="location"><?=$arItem["PROPERTY_LOCATION_VALUE"]?></p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<span><?=GetMessage("AREA")?>:</span>
										<strong><?=$arItem["PROPERTY_SQUARE_VALUE"]?>m<sup>2</sup></strong>
									</div>
									<div class="col">
										<span><?=GetMessage("BEDS")?>:</span>
										<strong><?=$arItem["PROPERTY_NUMBER_OF_BEDROOMS_VALUE"]?></strong>
									</div>
									<div class="col">
										<span><?=GetMessage("BATHS")?>:</span>
										<strong><?=$arItem["PROPERTY_NUMBER_OF_BATHROOMS_VALUE"]?></strong>
									</div>
									<div class="col">
										<span><?=GetMessage("GARAGES")?>:</span>
										<? if($arItem["PROPERTY_GARAGE_VALUE"]!=NULL):?>
										<strong>1</strong>
										<? else:?>
										<strong>0</strong>
										<?endif?>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				<?endforeach;?>
		</div>
	</div>
</div>