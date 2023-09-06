<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "about_company",
		"EDIT_TEMPLATE" => ""
	),
	false
);?><br>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>