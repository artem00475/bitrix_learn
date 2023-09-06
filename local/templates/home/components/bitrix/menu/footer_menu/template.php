<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="col-lg-4 mb-5 mb-lg-0">
        <div class="row mb-5">
          <div class="col-md-12">
            <h3 class="footer-heading mb-4"><?=GetMessage("NAV_TITLE")?></h3>
          </div>
          <div class="col-md-6 col-lg-6">
            <ul class="list-unstyled">
				<?for($index=0;$index<count($arResult)/2;$index++):?>
					<li><a href="<?=$arResult[$index]["LINK"]?>"><?=$arResult[$index]["TEXT"]?></a></li>
				<?endfor?>
            </ul>
          </div>
          <div class="col-md-6 col-lg-6">
            <ul class="list-unstyled">
				<?for($index=ceil(count($arResult)/2);$index<count($arResult);$index++):?>
					<li><a href="<?=$arResult[$index]["LINK"]?>"><?=$arResult[$index]["TEXT"]?></a></li>
				<?endfor?>
            </ul>
          </div>
        </div>
      </div>
<?endif?>