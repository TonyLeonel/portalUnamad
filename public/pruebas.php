<?php

use setasign\Fpdi\Fpdi;
// Datos de ejemplo
$firmados = [
    "temp/tYLJFp4bQT3tG9BgMhV1xmQn3HzGluuXEbvFdqoY/1_Jm7c38T1FhOHY9v6ryXUIyBam20ti7bJ7D4VRuaT[R].pdf",
    "temp/tYLJFp4bQT3tG9BgMhV1xmQn3HzGluuXEbvFdqoY/1_ol9I3hFnnTOLbzkPLJqzN0toMR7oWuokhl24Abur[R].pdf",
    "temp/tYLJFp4bQT3tG9BgMhV1xmQn3HzGluuXEbvFdqoY/2_Jm7c38T1FhOHY9v6ryXUIyBam20ti7bJ7D4VRuaT[R].pdf",
    "temp/tYLJFp4bQT3tG9BgMhV1xmQn3HzGluuXEbvFdqoY/2_ol9I3hFnnTOLbzkPLJqzN0toMR7oWuokhl24Abur[R].pdf",
    "temp/tYLJFp4bQT3tG9BgMhV1xmQn3HzGluuXEbvFdqoY/3_Jm7c38T1FhOHY9v6ryXUIyBam20ti7bJ7D4VRuaT[R].pdf",
    "temp/tYLJFp4bQT3tG9BgMhV1xmQn3HzGluuXEbvFdqoY/3_ol9I3hFnnTOLbzkPLJqzN0toMR7oWuokhl24Abur[R].pdf",
    "temp/tYLJFp4bQT3tG9BgMhV1xmQn3HzGluuXEbvFdqoY/4Hk2T7aR2po4n0mKiMysyzx3MO3NQemOjf4WUuZN[R].pdf",
    "temp/tYLJFp4bQT3tG9BgMhV1xmQn3HzGluuXEbvFdqoY/4_Jm7c38T1FhOHY9v6ryXUIyBam20ti7bJ7D4VRuaT[R].pdf",
    "temp/tYLJFp4bQT3tG9BgMhV1xmQn3HzGluuXEbvFdqoY/5_Jm7c38T1FhOHY9v6ryXUIyBam20ti7bJ7D4VRuaT[R].pdf",
    "temp/tYLJFp4bQT3tG9BgMhV1xmQn3HzGluuXEbvFdqoY/6_Jm7c38T1FhOHY9v6ryXUIyBam20ti7bJ7D4VRuaT[R].pdf"
];

$rutaUnidos = [];

$directorio = dirname($firmados[0]); // temp/aaa/
print("<pre>".print_r($directorio,true)."</pre>");

foreach ($firmados as $archivo) { 
    $directorio = dirname($archivo); // temp/aaa/
    $archivoBase = basename($archivo); // nombreArchivo1[R].pdf
    $partes = explode('_', $archivoBase); //[0] = Nro. Página , [1] = nombreArchivo1[R].pdf
    $nombreDividido = end($partes); // end($partes) = [1] = nombreArchivo1[R].pdf
    $pagina = (int)$partes[0]; // (int)$partes[0] = Nro. Página
    $archivosDivididos[$nombreDividido][] = $archivoBase; //Insertamos al array bidimiensional cada nombre de archivo
}

foreach ($archivosDivididos as $nombreDiv => $archivos) {
    // echo "Nombre del archivo dividido:". $nombreDiv. "<br>";
    // echo "Cantidad de archivos: " . count($archivos) . "<br>";
    // echo "Archivos:<br>";

    // $pdfMerger = new Fpdi();

    foreach ($archivos as $archivo) { // $archivo = nombreArchivo1[R].pdf
        // echo $archivo . "<br>";
        // print("<pre>".print_r($directorio,true)."</pre>");
        // print("<pre>".print_r($directorio.'/'.$archivo,true)."</pre>");
        // $pdfPath = $directorio.$archivo; // $directorio = temp/aaa/
        // $pdfMerger->setSourceFile($pdfPath);
        // $templateId = $pdfMerger->importPage(1);
        // $pdfMerger->AddPage();
        // $pdfMerger->useTemplate($templateId);
    }

    // $outputPath = public_path().'/'.$directorio.$nombreDiv;

    print("<pre>".print_r('C:\Apache24\htdocs\sgd_unamad\public\\'.$directorio.'/'.$nombreDiv,true)."</pre>");
    
    // $pdfMerger->Output($outputPath, 'F');
    // $rutaUnidos[]=$outputPath;
}
?>
