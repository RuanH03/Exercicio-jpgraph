<?php

    require_once ('../myExamples/conection/conection.php');
    require_once ('../../php/include/jpgraph/jpgraph.php');
    require_once ('../../php/include/jpgraph/jpgraph_bar.php');

    $data1y=array($qtdMulheres[0],$qtdHomens[0]);   
    $graph = new Graph(500, 480, 'auto');
    $graph->SetScale('textlin');

    $theme_class = new AquaTheme();
    $graph->SetTheme($theme_class);

    $graph->SetFrame(true, 'lightgray');                  

    $graph->title->Set("Quantidade de pessoas");                  
    $graph->xaxis->SetTickLabels(array('Feminino','Masculino'));

    // add barplot
    $bplot = new BarPlot($data1y);
    $graph->Add($bplot);
    $graph->SetColor('#cc1111');   

    $graph->Stroke();

?>
