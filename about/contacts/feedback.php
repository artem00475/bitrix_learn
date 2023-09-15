<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Обратная связь");
$APPLICATION->SetTitle("Обратная связь");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(),$_SERVER['REQUEST_URI']);
?><div class="site-section">
	<div class="container">
		<div class="row">
			 <?$APPLICATION->IncludeComponent(
				"bitrix:main.feedback",
				"feedback_form",
				Array(
					"COMPONENT_TEMPLATE" => "feedback_form",
					"EMAIL_TO" => "tuchin12345678artem@gmail.com",
					"EVENT_MESSAGE_ID" => array(0=>"7",),
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",
					"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
					"USE_CAPTCHA" => "Y"
				)
			);?>
			<div class="col-lg-4">
				<div class="p-4 mb-3 bg-white">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => ""
						)
					);?>
				</div>
			</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>