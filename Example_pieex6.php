<?php

    require_once ('../myExamples/conection/conection.php');
    require_once ('../../php/include/jpgraph/jpgraph.php');
    require_once ('../../php/include/jpgraph/jpgraph_pie.php');
    
    $total = $qtdMulheres[0] + $qtdHomens[0];
    $qtdMulheres[0] = ($qtdMulheres[0]/$total)*100;
    $qtdHomens[0] = ($qtdHomens[0] / $total)*100;
    $data = array($qtdMulheres[0],$qtdHomens[0]);
    
    $graph = new PieGraph(350,400);
    
    $graph->clearTheme();
    $graph->SetShadow();
    
    $graph->title->Set("Graph");
    $graph->title->SetFont(FF_FONT1,FS_BOLD);
    
    $p1 = new PiePlot($data);
    
    $p1->SetCenter(0.5,0.6);
    
    $p1->ShowBorder(false);
    
    $p1->value->SetFont(FF_FONT1,FS_BOLD);
    $p1->value->SetColor("black");
    
    $p1->SetLabelType(PIE_VALUE_ABS);
    
    $p1->value->SetFormat("%.1f%%");
    $p1->value->Show();
    
    $p1->SetSize(0.3);
    
    $p1->SetLegends(array("Feminino","Masculino"));
    $graph->legend->Pos(0.05,0.88);
    
    $graph->Add($p1);
    $graph->Stroke();


    $conn->close();

?>