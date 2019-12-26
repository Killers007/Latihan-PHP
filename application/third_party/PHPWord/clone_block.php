<?php
include_once 'vendor/autoload.php';
// Template processor instance creation
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('tes.docx');
// Will clone everything between ${tag} and ${/tag}, the number of times. By default, 1.
$templateProcessor->cloneBlock('CLONEME', 3);
// Everything between ${tag} and ${/tag}, will be deleted/erased.
$templateProcessor->deleteBlock('DELETEME');
$templateProcessor->saveAs('anjay.docx');
// echo getEndingNotes(array('Word2007' => 'docx'), 'Sample_23_TemplateBlock');

?>
