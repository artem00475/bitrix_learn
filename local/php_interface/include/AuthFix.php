<?
    use \Bitrix\Main\EventManager;
    use \Bitrix\Main\Entity\Event;
    class AuthFix {
        public static function init() {
        EventManager::getInstance()->addEventHandler('main', 'onBeforeUserLoginByHttpAuth', function (&$arAuth) {
                return false;
            });
        }
    }
?>