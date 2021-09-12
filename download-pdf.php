<?php

define('_MPDF_PATH','mpdf/');
include(_MPDF_PATH . "mpdf.php");

$name_document='qr-pdf';
$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');
ob_start();

$tempdir = "temp/";
if (!file_exists($tempdir))
    mkdir($tempdir);

?>
<html>
<head>
</head>
<body>
    <?php
      if(isset($_POST['submit'])){
        require 'phpqrcode/qrlib.php';
        $url = $_POST['url'];


        $details = $url.' ';

        $file = 'images/'.uniqid().'.png';
        $ecc = $_POST['level'];
        $pixel_Size = $_POST['size'];
        $frame_Size = 0;
        $text = stripslashes($_POST['text']);

        QRcode::png($details,$file,$ecc,$pixel_Size,$frame_Size);
        echo "<center><img src='".$file."'></center>" ;
        echo "<center><p>Text:<b>$text</b></p></center>";
      }
    ?>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$name_document.".pdf" ,'D');
?>
