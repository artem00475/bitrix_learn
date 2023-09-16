<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<div class="site-section">
	<div class="container">
	<?
		if (!empty($arParams["~AUTH_RESULT"]))
		{
			ShowMessage($arParams["~AUTH_RESULT"]);
		}
		?>
		<?if($arResult["SHOW_EMAIL_SENT_CONFIRMATION"]):?>
			<p><?echo GetMessage("AUTH_EMAIL_SENT")?></p>
		<?endif;?>

		<?if(!$arResult["SHOW_EMAIL_SENT_CONFIRMATION"] && $arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
			<p><?echo GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></p>
		<?endif?>
		<noindex>
		<?if(!$arResult["SHOW_EMAIL_SENT_CONFIRMATION"]):?>
		<form class="p-5 bg-white border" method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform" enctype="multipart/form-data">
			<input type="hidden" name="AUTH_FORM" value="Y" />
			<input type="hidden" name="TYPE" value="REGISTRATION" />
			<div class="row form-group">
				<div class="col-md-12 mb-3 mb-md-0">
					<label class="font-weight-bold" for="fullname"><?=GetMessage("AUTH_NAME")?></label>
					<input type="text" id="name" class="form-control" placeholder="<?=GetMessage("AUTH_NAME")?>" name="USER_NAME" maxlength="50" value="<?=$arResult["USER_NAME"]?>">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12 mb-3 mb-md-0">
					<label class="font-weight-bold" for="fullname"><?=GetMessage("AUTH_LAST_NAME")?></label>
					<input type="text" id="lastname" class="form-control" placeholder="<?=GetMessage("AUTH_LAST_NAME")?>" name="USER_LAST_NAME" maxlength="50" value="<?=$arResult["USER_LAST_NAME"]?>">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12 mb-3 mb-md-0">
					<label class="font-weight-bold" for="login"><?=GetMessage("AUTH_LOGIN_MIN")?></label>
					<input type="text" id="login" class="form-control" placeholder="<?=GetMessage("AUTH_LOGIN_MIN")?>" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12 mb-3 mb-md-0">
					<label class="font-weight-bold" for="pass"><?=GetMessage("AUTH_PASSWORD_REQ")?></label>
					<input  id="pass" class="form-control" placeholder="<?=GetMessage("AUTH_PASSWORD_REQ")?>" type="password" name="USER_PASSWORD" maxlength="255" value="<?=$arResult["USER_PASSWORD"]?>" autocomplete="off">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12 mb-3 mb-md-0">
					<label class="font-weight-bold" for="pass_conf"><?=GetMessage("AUTH_CONFIRM")?></label>
					<input  id="pass_conf" class="form-control" placeholder="<?=GetMessage("AUTH_CONFIRM")?>" type="password" name="USER_CONFIRM_PASSWORD" maxlength="255" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" autocomplete="off">
				</div>
			</div>
			<?if($arResult["EMAIL_REGISTRATION"]):?>
				<div class="row form-group">
					<div class="col-md-12 mb-3 mb-md-0">
						<label class="font-weight-bold" for="email"><?=GetMessage("AUTH_EMAIL")?></label>
						<input  id="email" class="form-control" placeholder="<?=GetMessage("AUTH_EMAIL")?>" type="email" name="USER_EMAIL" maxlength="255" value="<?=$arResult["USER_EMAIL"]?>">
					</div>
				</div>
			<?endif?>
			<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
				<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="fields"><?=$arUserField["EDIT_FORM_LABEL"]?>:</label><br>
							<?$APPLICATION->IncludeComponent(
							"bitrix:system.field.edit",
							$arUserField["USER_TYPE"]["USER_TYPE_ID"],
							array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "bform"), null, array("HIDE_ICONS"=>"Y"));?>
						</div>
					</div>
				<?endforeach;?>
			<?endif;?>
			<?if ($arResult["USE_CAPTCHA"] == "Y"):?>
				<div class="row form-group">
					<div class="col-md-12 mb-3 mb-md-0">
						<input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHA_CODE"])?>" />
						<img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHA_CODE"])?>?>" width="180" height="40" alt="CAPTCHA" />
						<input  id="captcha" class="form-control" placeholder="<?=GetMessage("CAPTCHA_REGF_PROMT")?>" type="text" name="captcha_word" maxlength="50" autocomplete="off">
					</div>
				</div>
			<?endif?>

			<div class="row form-group">
				<div class="col-md-12">
					<input type="submit" name="Register" value="<?=GetMessage("AUTH_REGISTER")?>" class="btn btn-primary  py-2 px-4 rounded-0"/>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<p><a class="font-weight-bold" href="<?=$arResult["AUTH_AUTH_URL"]?>" rel="nofollow"><b><?=GetMessage("AUTH_AUTH")?></b></a></p>
				</div>
			</div>
		</form>
		<script type="text/javascript">
			document.bform.USER_NAME.focus();
		</script>
		<?endif?>
		</noindex>
	</div>
</div>