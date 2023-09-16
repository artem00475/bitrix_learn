<?
    use \Bitrix\Main\EventManager;
    use \Bitrix\Main\Entity\Event;
    class HBEvents {
        public static function init() {
        $eventManager = EventManager::getInstance();
        $eventManager->addEventHandler('', 'AgentOnAfterAdd', [self::class,'resetCache']);
        $eventManager->addEventHandler('', 'AgentOnAfterUpdate', [self::class,'resetCache']);
        $eventManager->addEventHandler('', 'AgentOnAfterDelete', [self::class,'resetCache']);

        }

        public static function resetCache(Event $event) {
            $tableName = $event->getEntity()->getDBTableName();
            $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
            $taggedCache->clearByTag('hlblock_table_name_' . $tableName);            
        }
    
    }
    
?>