<?php

function view($view, $data) {
    global $selectedTemplate;
    
    $templateContent = file_get_contents('./templates/' . $selectedTemplate . '/' . $view . '.php');

    foreach( $data as $key => $val) {
        $templateContent = str_replace('{{'. $key .'}}', $val, $templateContent);
    }

    echo $templateContent;
}
