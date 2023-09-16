<?
    use \Bitrix\Main\EventManager;
    use \Bitrix\Main\Entity\Event;
    class RegisterEvents {
        public static function init() {
        $eventManager = EventManager::getInstance();
        $eventManager->addEventHandler('main', 'OnAfterUserRegister', [self::class,'setGroup']);

        }

        public static function setGroup(&$arFields) {
            if($arFields["USER_ID"] > 0) 
            {
                if($arFields["UF_TYPE"] == "5") 
                { 
                    $arGroups = CUser::GetUserGroup($arFields["USER_ID"]); 
                    array_push($arGroups,7);
                    CUser::SetUserGroup($arFields["USER_ID"], $arGroups); 
                } 
                else if ($arFields["UF_TYPE"] == "6") 
                { 
                    $arGroups = CUser::GetUserGroup($arFields["USER_ID"]); 
                    array_push($arGroups,6);
                    CUser::SetUserGroup($arFields["USER_ID"], $arGroups); 
                } 
            } 
        }
    
    }
?>