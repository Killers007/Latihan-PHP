<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once APPPATH . "/libraries/PHPExcel.php";

//require_once(APPPATH.'/third_party/ZipArchive.php');

class Excel extends PHPExcel {

    private $styleBorder;
    private $cellColor;
    private $textCenter;

    public function __construct() {
        parent::__construct();

        $styleBorder = array(
            'borders' => array(
                'allborders' => array(
                    'style' => PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );
        $cellColor = array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'startcolor' => array(
                'rgb' => 'FFF936'
            )
        );
        $textCenter = array(
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            )
        );

        $this->styleBorder = $styleBorder;
        $this->cellColor = $cellColor;
        $this->textCenter = $textCenter;
    }

    public static function saveMacros($obj,$fileName,$macrosPath){
        // Write Excel 2007 document       
        $objWriter = new PHPExcel_Writer_Excel2007($obj);

        // Generate a temp file and save Excel document to temp file
        $tmpfname = tempnam("/tmp", "FOO");
        $objWriter->save($tmpfname);
        $zip = new ZipArchive; // Start Zip archive
        $zip->open($tmpfname); // Open our stored Excel document
        // Add our VBA script to the Excel Zip Document
        $zip->addFile($macrosPath, 'xl/vbaProject.bin');

        // Get the contents of our Content Types xml document from our Excel Zip Document
        $ContentTypes = $zip->getFromName('[Content_Types].xml');

        // Generate an XML object with PHP's DOM functions http://us.php.net/manual/en/book.dom.php
        $ContentTypesXML = new DomDocument();
        $success = (int) @$ContentTypesXML->loadXML($ContentTypes);
        $Types = $ContentTypesXML->getElementsByTagName('Types')->item(0);

        // Add Override node to our Content Types with the file location of our VBA script
        $Override = $ContentTypesXML->createElement("Override");
        $Override = $Types->appendChild($Override);
        $Override->setAttribute('PartName', '/xl/vbaProject.bin');
        $Override->setAttribute('ContentType', 'application/vnd.ms-office.vbaProject');

        // Find out workbook and update the content type to be xlsm instead of xlsx
        foreach ($Types->getElementsByTagName('Override') as $Override) {
            if ($Override->hasAttribute('PartName') && $Override->getAttribute('PartName') == "/xl/workbook.xml") {
                $Override->setAttribute('ContentType', 'application/vnd.ms-excel.sheet.macroEnabled.main+xml');
            }
        }
        // Save content type back to our Excel Zip Document
        $zip->addFromString('[Content_Types].xml', $ContentTypesXML->saveXML());

        // Get our workbook relationship xml document
        $Workbook = $zip->getFromName('xl/_rels/workbook.xml.rels');

        // Generate an XML object with PHP's DOM functions http://us.php.net/manual/en/book.dom.php
        $WorkbookXML = new DomDocument();
        $success = (int) @$WorkbookXML->loadXML($Workbook);
        $Rltns = $WorkbookXML->getElementsByTagName('Relationships')->item(0);

        // Add Relationship that points to our VBA script
        $Rltn = $WorkbookXML->createElement("Relationship");
        $Rltn = $Rltns->appendChild($Rltn);
        $Rltn->setAttribute('Id', 'rId99'); // Arbitraty Relationship ID NOTE may need a higher number based on the number of worksheets and other elements in your Excel document, update would be to calculate the number of children inside the Relationships XML Node
        $Rltn->setAttribute('Type', 'http://schemas.microsoft.com/office/2006/relationships/vbaProject');
        $Rltn->setAttribute('Target', 'vbaProject.bin'); // Our VBA script
        // Save our updated XML to our Workbook relationship xml
        $zip->addFromString('xl/_rels/workbook.xml.rels', $WorkbookXML->saveXML());

        $zip->close(); // Close the zip file.
        // Output xlsm headers
        header('Content-Type: application/vnd.ms-excel.sheet.macroEnabled.main+xml'); // xlsm
        //header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // xlsx
        header('Content-Disposition: attachment;filename="' . $fileName . '.xlsm"');
        header('Cache-Control: max-age=0');

        $handle = fopen($tmpfname, "r");
        $BUFF = fread($handle, filesize($tmpfname));
        fclose($handle);
        unset($handle);

        echo $BUFF;

        unlink($tmpfname);
    }

    public function saveWithMacros($fileName, $macrosPath) {
        // Write Excel 2007 document       
        $objWriter = new PHPExcel_Writer_Excel2007($this);

        // Generate a temp file and save Excel document to temp file
        $tmpfname = tempnam("/tmp", "FOO");
        $objWriter->save($tmpfname);
        $zip = new ZipArchive; // Start Zip archive
        $zip->open($tmpfname); // Open our stored Excel document
        // Add our VBA script to the Excel Zip Document
        $zip->addFile($macrosPath, 'xl/vbaProject.bin');

        // Get the contents of our Content Types xml document from our Excel Zip Document
        $ContentTypes = $zip->getFromName('[Content_Types].xml');

        // Generate an XML object with PHP's DOM functions http://us.php.net/manual/en/book.dom.php
        $ContentTypesXML = new DomDocument();
        $success = (int) @$ContentTypesXML->loadXML($ContentTypes);
        $Types = $ContentTypesXML->getElementsByTagName('Types')->item(0);

        // Add Override node to our Content Types with the file location of our VBA script
        $Override = $ContentTypesXML->createElement("Override");
        $Override = $Types->appendChild($Override);
        $Override->setAttribute('PartName', '/xl/vbaProject.bin');
        $Override->setAttribute('ContentType', 'application/vnd.ms-office.vbaProject');

        // Find out workbook and update the content type to be xlsm instead of xlsx
        foreach ($Types->getElementsByTagName('Override') as $Override) {
            if ($Override->hasAttribute('PartName') && $Override->getAttribute('PartName') == "/xl/workbook.xml") {
                $Override->setAttribute('ContentType', 'application/vnd.ms-excel.sheet.macroEnabled.main+xml');
            }
        }
        // Save content type back to our Excel Zip Document
        $zip->addFromString('[Content_Types].xml', $ContentTypesXML->saveXML());

        // Get our workbook relationship xml document
        $Workbook = $zip->getFromName('xl/_rels/workbook.xml.rels');

        // Generate an XML object with PHP's DOM functions http://us.php.net/manual/en/book.dom.php
        $WorkbookXML = new DomDocument();
        $success = (int) @$WorkbookXML->loadXML($Workbook);
        $Rltns = $WorkbookXML->getElementsByTagName('Relationships')->item(0);

        // Add Relationship that points to our VBA script
        $Rltn = $WorkbookXML->createElement("Relationship");
        $Rltn = $Rltns->appendChild($Rltn);
        $Rltn->setAttribute('Id', 'rId99'); // Arbitraty Relationship ID NOTE may need a higher number based on the number of worksheets and other elements in your Excel document, update would be to calculate the number of children inside the Relationships XML Node
        $Rltn->setAttribute('Type', 'http://schemas.microsoft.com/office/2006/relationships/vbaProject');
        $Rltn->setAttribute('Target', 'vbaProject.bin'); // Our VBA script
        // Save our updated XML to our Workbook relationship xml
        $zip->addFromString('xl/_rels/workbook.xml.rels', $WorkbookXML->saveXML());

        $zip->close(); // Close the zip file.
        // Output xlsm headers
        header('Content-Type: application/vnd.ms-excel.sheet.macroEnabled.main+xml'); // xlsm
        //header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); // xlsx
        header('Content-Disposition: attachment;filename="' . $fileName . '.xlsm"');
        header('Cache-Control: max-age=0');

        $handle = fopen($tmpfname, "r");
        $BUFF = fread($handle, filesize($tmpfname));
        fclose($handle);
        unset($handle);

        echo $BUFF;

        unlink($tmpfname);
    }

    public function generateExcel($data,$file,$field,$startCol = "A"){
            $objPHPExcel = new PHPExcel;
            $objPHPExcel->getDefaultStyle()->getFont()->setName('Calibri');
            $objPHPExcel->getDefaultStyle()->getFont()->setSize(12);

            $acSheet = $objPHPExcel->getActiveSheet();

            $c = $startCol;
            $lastCol = 'A';    
            foreach($field as $t){
                $acSheet->setCellValue("$c"."1",$t);
                $c++;
                ++$lastCol;

            }
            
            $lastCol = chr(ord($c) -1 );

            $i = 1;
            foreach ($data as $val) {
                $i++;
                $c = $startCol;
                foreach($field as $f=>$t){
                    
                        $acSheet->setCellValue("$c$i",$val[$f]);
                    $c++;
                }
            }

            $acSheet->getStyle("$startCol"."1:$lastCol"."1")->applyFromArray($this->styleBorder);
            $acSheet->getStyle("$startCol"."1:$lastCol"."1")->applyFromArray($this->textCenter);
            $acSheet->getStyle("$startCol"."1:$lastCol"."1")->getFill()->applyFromArray($this->cellColor);
            foreach(range($startCol,$lastCol) as $columnID) {
                $acSheet->getColumnDimension($columnID)
                    ->setAutoSize(true);
            }
            
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel5");
//            $objWriter->save("$file.xls");

            header("Content-Type: application/vnd.ms-excel");
            header("Content-Disposition: attachment;filename=$file.xls");
            header('Cache-Control: max-age=0');
            $objWriter->save('php://output');
    }

    function excelGenerate($dataTable = NULL)
    {
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        
        $table_columns = array("Nama", "NIM", "Tempat tanggal Lahir");
        
        $column = 0;

        $from = "A1";
        $to = "I1";
        $object->getActiveSheet()->getStyle("$from:$to")->getFont()->setBold( true );
        $object->getActiveSheet()->getStyle("$from:$to")->applyFromArray(
            array(
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => 'FFFF00')
                )
            )
        );

        $object->getActiveSheet()->getColumnDimension('A')->setWidth(21);
        $object->getActiveSheet()->getColumnDimension('B')->setWidth(25);
        $object->getActiveSheet()->getColumnDimension('C')->setWidth(17);

        foreach($table_columns as $field)
        {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }
        
        $excel_row = 2;
        
        $style = array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        );

        foreach($dataTable as $row)
        {
            $object->getDefaultStyle()->getAlignment()->setWrapText(true);
            $object->getDefaultStyle()->getAlignment()->applyFromArray($style);

            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->nim);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nama);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->ttl);

            $excel_row++;
        }
        
        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
        header('Content-Type: application/vnd.ms-excel');

        $namaFile = strtoupper('Juhdi');

        header('Content-Disposition: attachment;filename="'.$namaFile.'-hasil-utmbk.xls"');

        $object_writer->save('php://output');
    }

}
