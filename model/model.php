<?php


function listLoad() 
{
    $list = file_get_contents('./helpers/charts.json');
    $list = json_decode($list, true);
    return $list['sum'];
}

function chartLoad($id) 
{
    $charts = file_get_contents('./helpers/charts.json');
    $charts = json_decode($charts, true);
    $chart['title'] = $charts["charts"][$id]["title"];
    $chart['tonality'] = $charts["charts"][$id]["tonality"];

    foreach($charts["charts"][$id]["sections"] as $section){
        $chart['sections'][] = $section["title"];
        $chart['sections'][] = parseChords($section["content"]);
    }

    return $chart;
}

function parseChords($chords){

    $chords = explode(".", $chords);

    if ($chords[count($chords)-1] == '(b)'){
        array_pop($chords);
        $chords = array_merge($chords, $chords);
        
    }

    return $chords;
}

?>
