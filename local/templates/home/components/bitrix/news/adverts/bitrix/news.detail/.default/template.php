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
<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>	
	<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row align-items-center justify-content-center text-center">
				<div class="col-md-10">
					<span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?=GetMessage('ADVERTS_DETAILS')?></span>
					<h1 class="mb-2"><?=$arResult["NAME"]?></h1>
					<? if($arResult["DISPLAY_PROPERTIES"]["COST"]):?>
						<p class="mb-5"><strong class="h2 text-success font-weight-bold">$<?=$arResult["DISPLAY_PROPERTIES"]["COST"]["VALUE"]?></strong></p>
					<?else:?>
						<p class="mb-5"><strong class="h2 text-success font-weight-bold">-</strong></p>
					<?endif?>
				</div>
			</div>
		</div>
	</div>
<?endif?>
<div class="site-section site-section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-8" style="margin-top: -150px;">
				<div class="mb-5">
					<div class="slide-one-item home-slider owl-carousel">
						<? if ($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]):?>
							<? if (count($arResult["PROPERTIES"]["IMAGE_GALLERY"]["VALUE"])==1):?>
								<div><img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></div>
							<? else:?>
								<?foreach ($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"] as $item):?>
									<div><img src="<?=$item["SRC"]?>" alt="Image" class="img-fluid"></div>
								<?endforeach?>
							<?endif?>
						<?endif?>
					</div>
				</div>
				<div class="bg-white">
					<div class="row mb-5">
						<div class="col-md-6">
							<?if ($arResult["DISPLAY_PROPERTIES"]["COST"]):?>
								<strong class="text-success h1 mb-3">$<?=$arResult["DISPLAY_PROPERTIES"]["COST"]["VALUE"]?></strong>
							<?else:?>
								<strong class="text-success h1 mb-3">-</strong>
							<?endif?>
						</div>
						<div class="col-md-6">
							<ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
								<li>
									<span class="property-specs"><?=GetMessage('ADVERTS_DETAILS_DATE')?></span>
									<span class="property-specs-number"><?=FormatDate("d.m.Y", MakeTimeStamp($arResult["TIMESTAMP_X"]))?></span>
									
								</li>
								<li>
									<span class="property-specs"><?=GetMessage('ADVERTS_DETAILS_FLOORS')?></span>
									<?if ($arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_FLOORS"]):?>
										<span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_FLOORS"]["DISPLAY_VALUE"]?></span>
									<?else:?>
										<span class="property-specs-number">-</span>
									<?endif?>
								</li>
								<li>
									<span class="property-specs"><?=GetMessage('ADVERTS_DETAILS_SQUARE')?></span>
									<?if ($arResult["DISPLAY_PROPERTIES"]["SQUARE"]):?>
										<span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["SQUARE"]["DISPLAY_VALUE"]?></span>
									<?else:?>
										<span class="property-specs-number">-</span>
									<?endif?>
								</li>
							</ul>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
							<span class="d-inline-block text-black mb-0 caption-text"><?=GetMessage('ADVERTS_DETAILS_BATH')?></span>
							<?if ($arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_BATHROOMS"]):?>
								<strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_BATHROOMS"]["DISPLAY_VALUE"]?></strong>
							<?else:?>
								<strong class="d-block">-</strong>
							<?endif?>
						</div>
						<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
							<span class="d-inline-block text-black mb-0 caption-text"><?=GetMessage('ADVERTS_DETAILS_GARAGE')?></span>
							<? if($arResult["DISPLAY_PROPERTIES"]["GARAGE"]):?>
								<strong class="d-block"><?=GetMessage('ADVERTS_DETAILS_GARAGE_Y')?></strong>
							<? else:?>
								<strong class="d-block"><?=GetMessage('ADVERTS_DETAILS_GARAGE_N')?></strong>
							<?endif?>
						</div>
					</div>
					<h2 class="h4 text-black"><?=GetMessage('ADVERTS_DETAILS_MORE')?></h2>
					<p><?=$arResult["DETAIL_TEXT"]?></p>

					<div class="row mt-5">
						<? if ($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]):?>
							<div class="col-12">
								<h2 class="h4 text-black mb-3"><?=GetMessage('ADVERTS_DETAILS_GALLERY')?></h2>
							</div>
							<? if (count($arResult["PROPERTIES"]["IMAGE_GALLERY"]["VALUE"])==1):?>
									<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
										<a href="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]?>" class="image-popup gal-item"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></a>
									</div>
							<? else:?>
								<?foreach ($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"] as $item):?>
									<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
										<a href="<?=$item["SRC"]?>" class="image-popup gal-item"><img src="<?=$item["SRC"]?>" alt="Image" class="img-fluid"></a>
									</div>
								<?endforeach?>
							<?endif?>
						<?endif?>
					</div>
					<?if ($arResult["DISPLAY_PROPERTIES"]["EXTRA_MATERIALS"] || $arResult["DISPLAY_PROPERTIES"]["EXTERNAL_REFERENCE"]):?>
						<div>
							<h2 class="h4 text-black mb-3"><?=GetMessage('ADVERTS_DETAILS_EXTRA')?></h2>
							<? if (count($arResult["PROPERTIES"]["EXTRA_MATERIALS"]["VALUE"])==1):?>
							<a href="<?=$arResult["DISPLAY_PROPERTIES"]["EXTRA_MATERIALS"]["FILE_VALUE"]["SRC"]?>"><?=$arResult["DISPLAY_PROPERTIES"]["EXTRA_MATERIALS"]["FILE_VALUE"]["SRC"]?></a><br>
							<? else:?>
								<?foreach ($arResult["DISPLAY_PROPERTIES"]["EXTRA_MATERIALS"]["FILE_VALUE"] as $item):?>
									<a href="<?=$item["SRC"]?>"><?=$item["SRC"]?></a><br>
								<?endforeach?>
							<?endif?>
							<?foreach ($arResult["DISPLAY_PROPERTIES"]["EXTERNAL_REFERENCE"]["VALUE"] as $item):?>
								<a href="<?=$item?>"><?=$item?></a><br>
							<?endforeach?>
						</div>
					<?endif?>
				</div>
			</div>
			
			<div class="col-lg-4 pl-md-5">

				<div class="bg-white widget border rounded">

					<h3 class="h4 text-black widget-title mb-3"><?=GetMessage('ADVERTS_DETAILS_FORM')?></h3>
					<form action="" class="form-contact-agent">
						<div class="form-group">
						<label for="name"><?=GetMessage('ADVERTS_DETAILS_FORM_NAME')?></label>
						<input type="text" id="name" class="form-control">
						</div>
						<div class="form-group">
						<label for="email"><?=GetMessage('ADVERTS_DETAILS_FORM_EMAIL')?></label>
						<input type="email" id="email" class="form-control">
						</div>
						<div class="form-group">
						<label for="phone"><?=GetMessage('ADVERTS_DETAILS_FORM_PHONE')?></label>
						<input type="text" id="phone" class="form-control">
						</div>
						<div class="form-group">
						<input type="submit" id="phone" class="btn btn-primary" value="<?=GetMessage('ADVERTS_DETAILS_FORM_SEND')?>">
						</div>
					</form>
				</div>

				<div class="bg-white widget border rounded">
					<h3 class="h4 text-black widget-title mb-3"><?=GetMessage('ADVERTS_DETAILS_PARAGRAPH')?></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
				</div>

			</div>
		
		</div>
	</div>
</div>
