<?php

use Greenter\XMLSecLibs\Sunat\SignedXml;

require 'vendor/autoload.php';

$xmlPath = __DIR__.'/invoice.xml';
$certPath = __DIR__.'/certificate.pem';

$signer = new SignedXml();
$signer->setCertificateFromFile($certPath);

$xmlSigned = $signer->signFromFile($xmlPath);

echo $xmlSigned;