<?php

// function print_objct($obj = null){

//     echo "<pre>";
//     print_r($obj);
//     echo "</pre>";
// }

// // function getTexto($elm=null){
   
// //     if(is_null($elm))
// //     return 0;
// //     foreach ($elm as $el){
// //         foreah ($el->ChildNodes as $nd){
            
// //         }
// //     }

// // }

// $content = file_get_contents('https://pt.aliexpress.com/item/1005002390459067.html');
// $dom = new DOMDocument();
// libxml_use_internal_errors(true);
// $dom->loadHTML($content);
// $xp = new DOMXPath($dom);
// $elm = $xp->query('.//*[@class="product-title"]');
// echo $elm->saveXML()


$html = file_get_contents('https://pt.aliexpress.com/item/1005001905877681.html?');

// libxml_use_internal_errors(true);

$js = preg_match('/\"pageModule(.+)\}/i', $html, $saida);
$saida = '{' . $saida[0];

#echo $saida;

$obj = json_decode($saida);
print_r($obj);

// $descricaoprod = $obj->pageModule->title;
// $precoprod = $obj->priceModule->formatedPrice;
// $imgprod =  $obj->pageModule->imagePath;
// $descontoprod = $obj->priceModule->formatedActivityPrice;

// echo $descricaoprod,'<br>', $precoprod,'<br>', $imgprod, '<br>', $descontoprod;

// echo $obj->pageModule->imagePath;

// echo $obj->pageModule->description;
// echo $obj->priceModule->formatedPrice;



//print_r($obj);

// $domDocument = new DOMDocument();
// $domDocument->loadHTML($html);

// $xpath = new DOMXPath($domDocument);
// echo $html;die;
// $titulo = $xpath->query("//h1");
// var_dump($titulo->count());

// die;

// $linkTags = $domDocument->getElementsByTagName("text");


// $linkList = "";

// foreach($linkTags as $link){

//     if(strpos($link->getAtributte('class'), 'product-title-text') === 0){

//         $linkList .= $link->textContent . "/n";
//     }
// };


// var_dump ($linkTags);


// file_put_contents('teste2.txt', $linkList);




// $ch = curl_init();

// curlsetopt





?>