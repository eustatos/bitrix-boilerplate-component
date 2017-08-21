<?php
   require_once(__DIR__ . '/../class.php');

   class ClassTest extends PHPUnit_Framework_TestCase
   {
      protected $classOB;
      public function setUp()
      {
         initBitrixCore();
         $this->classOB = new \eustatos\excomp\EustatosExcomp();
      }
      public function testMyTest()
      {
         $this->assertTrue(true);
      }
      public function testIfModulesInstalled()
      {
         $this->assertTrue(Bitrix\Main\ModuleManager::IsModuleInstalled("iblock"), 'Модуль "iblock" не установлен.');
         $this->assertTrue(Bitrix\Main\ModuleManager::IsModuleInstalled("catalog"), 'Модуль "catalog" не установлен.');
         $this->assertTrue(Bitrix\Main\ModuleManager::IsModuleInstalled("sale"), 'Модуль "sale" не установлен.');
      }
      public function tearDown()
      {
         unset($this->classOB);
      }
   }
