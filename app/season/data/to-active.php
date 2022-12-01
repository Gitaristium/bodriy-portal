<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$id = $_GET['id'];
// Установим новое значение для данного свойства данного элемента
$el = new CIBlockElement;
$el->Update($id, array('ACTIVE' => 'Y'));
// $el->SetPropertyValuesEx($id, 32, array('ACTIVE' => 'Y'));