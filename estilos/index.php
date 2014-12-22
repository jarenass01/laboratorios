<?php
require_once '../excelib/PHPExcel.php';
require_once '../excelib/PHPExcel/IOFactory.php';

$objReader = PHPExcel_IOFactory::createReader('Excel2007');

$objReader->setReadDataOnly(true);
$objPHPExcel = $objReader->load("texc.xlsx");
$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
//objWorksheet = $objPHPExcel->getActiveSheet();

echo '<table border=1>' . "\n";

foreach ($objWorksheet->getRowIterator() as $row)
{
  echo '<tr>' . "\n";
  $cellIterator = $row->getCellIterator();
  $cellIterator->setIterateOnlyExistingCells(false);

  foreach ($cellIterator as $cell)
  {
    echo '<td>' . $cell->getValue() . '</td>' . "\n";
  }

  echo '</tr>' . "\n";
}

echo '</table>' . "\n";