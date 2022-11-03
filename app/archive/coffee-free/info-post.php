<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$newPlayNumber = $_GET['newPlayNumber'];
CIBlockElement::SetPropertyValuesEx(2287, 30, array('72' => $newPlayNumber));

// $newArrayNumber = $_GET['newWinNumber'];
// CIBlockElement::SetPropertyValuesEx(2286, 30, array('72' => $newArrayNumber));


//добвление учатсника в список
$el = new CIBlockElement;

$PROP = array();
$PROP[74] = $_GET['newPlayerCity']; //город
$PROP[76] = $_GET['winner'];        //выиграл или нет


$arLoadProductArray = array(
  "MODIFIED_BY"    => 1, // элемент изменен текущим пользователем
  // "IBLOCK_SECTION_ID" => true,          // элемент лежит в корне раздела
  "IBLOCK_ID"      => 31,
  "PROPERTY_VALUES" => $PROP,
  "NAME"           => $_GET['newPlayerCity'],
  "ACTIVE"         => "Y"            // активен
);

if ($PRODUCT_ID = $el->Add($arLoadProductArray))
  echo "New ID: " . $PRODUCT_ID;
else
  echo "Error: " . $el->LAST_ERROR;