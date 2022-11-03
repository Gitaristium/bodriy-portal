<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$picturePHP = $_POST['pictureJS'];
CModule::IncludeModule("iblock");
$list = CIBlockElement::GetProperty('24', $picturePHP, array("sort" => "asc"), array("CODE" => "files"));
if ($listItem = $list->GetNext()) {
  $value = $listItem['VALUE'];
  $file = CFile::GetFileArray($value);
  $src = $file['SRC'];
  echo $src;
}