<?php
if(isset($GET["a"]) && $GET["a"]==1){
    
}  else {
    $doc = new DOMDocument();
    $doc->loadHTMLFile("testTemplate.html");
    $el = $doc->getElementById("cnt-text");
    $el->textContent = "Moin";
    echo $doc->saveHTML();
}