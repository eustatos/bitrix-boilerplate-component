<?php
   use Bitrix\Main\Localization\Loc;

   if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

   Loc::loadMessages(__FILE__);

   $arComponentDescription = array(
      "NAME" => Loc::getMessage("EUSTATOS_EXCOMP_NAME"),
      "DESCRIPTION" => Loc::getMessage("EUSTATOS_EXCOMP_DESCRIPTION"),
      "SORT" => 10,
      "CACHE_PATH" => "Y",
      "PATH" => array(
         "ID" => Loc::getMessage("EUSTATOS_EXCOMP_ID"),
         "SORT" => 2000,
         "NAME" => Loc::getMessage("EUSTATOS_EXCOMP_GROUP_ID"),
         "CHILD" => array(
            "ID" => "alarmess",
            "NAME" => Loc::getMessage("EUSTATOS_EXCOMP_CALL"),
            "SORT" => 10,
         )
      ),
   );

