<?php

namespace MyCompany\Custom\EventHandlers;

use Bitrix\Main\Type\DateTime;
use Bitrix\Main\Entity\EventResult;
use Bitrix\Main\Entity\Event;

class SearchHistory
{
	public static function saveQuerySearchInfo(Event $event): EventResult
	{
        global $USER;
        $fiedls = $event->getParametrs('fileds');
        $changedFields = [];
        $userID = (int)$USER->getId();
        if(!isset($fiedls['UF_USER_ID']) && $userID ){
            $changedFields['UF_USER_ID'] = $userID;
        }
        if(!isset($fiedls['UF_DATETIME'])){
            $changedFields['UF_DATETIME'] = new DateTime();
        }
        $result =  new EventResult();
        if(!empty($changedFields)){
            $result->modifyFields($changedFields);
        }
        return $result;
	}
}
