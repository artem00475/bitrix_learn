<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Агенты");
$APPLICATION->SetTitle("Агенты");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(),$_SERVER['REQUEST_URI']);
?>
<? $APPLICATION->IncludeComponent(
	"bm:agents.list", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"HLBLOCK_TNAME" => "agents",
		"ITEMS_COUNT" => "3",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>