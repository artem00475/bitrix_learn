<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Агенты");
$APPLICATION->SetTitle("Агенты");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(),$_SERVER['REQUEST_URI']);
?>Text here....<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>