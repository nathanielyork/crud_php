<?php
function inputElement($icon,$placeholder,$name,$value){
    $ele="<div class=\"input-group mb-2\">
    <div class=\"input-group-prepend\">
    <div class=\"input-group-text bg-warning\">$icon</div>
    </div>
    <input value='$value' name='$name' type=\"text\" autocomplete=\"off\" placeholder=$placeholder class=\"form-control\" id=\"inlineFormInputGroup\" placeholder=\"Username\">
    </div>";
    echo$ele;
}

function buttonElement($btnid,$class,$text,$name,$attr){
    $btn="
    <button name='$name' '$attr' class='$class' id='$btnid'>$text</button>
    
    ";
    echo$btn;
}


?>