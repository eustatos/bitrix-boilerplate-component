<?php
   namespace eustatos\excomp;

   if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

   class EustatosExcomp extends \CBitrixComponent
   {
      public function currentDate()
      {
         return date('Y-m-d');
      }
   }
