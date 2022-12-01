<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$result = CIBlockElement::GetList(
  array("CREATED" => "DESC"),
  array("IBLOCK_ID" => 32, "ACTIVE" => "N"),
  false,
  array()
)->Fetch();

// while ($row = $result->Fetch()) {
//   $text = $row[DETAIL_TEXT];
//   $id = $row[ID];
// }

// echo ('<pre>');
// print_r($result->Fetch());
// echo ('</pre>');
echo json_encode($result);