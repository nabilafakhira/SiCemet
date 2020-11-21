<?php 
function Analisis ($keb, $komp, $w, $o, $kemam, $klien){
    $poinIncre=0;
    $poinV=0;
    $poinSpiral=0;
    $poinRAD=0;
    $poinPro=0;
    $poinScrum=0;
    $poinXp=0;
    $poinIter=0;
    $poinRUP=0;

    if($keb=="jelas"){
        $poinV=$poinV+1;
        $poinScrum=$poinScrum+1;
        $poinXp=$poinXp+1;
        $poinIter=$poinIter+1;
        $poinRUP=$poinRUP+1;
        $poinIncre=$poinIncre+1;

        if($komp=="sederhana"){
            $poinXp=$poinXp+1;
        }else if($komp=="kompleks"){
            $poinV=$poinV+1;
            $poinScrum=$poinScrum+1;
            $poinIncre=$poinIncre+1;
        }else{
            $poinIter=$poinIter+1;
            $poinRUP=$poinRUP+1;
        }

        if($w=="1"){
            $poinXp=$poinXp+1;
        }else if($w=="3"){
            $poinIncre=$poinIncre+1;
            $poinScrum=$poinScrum+1;
            $poinIter=$poinIter+1;
        }else if($w=="6"){
            $poinV=$poinV+1;
        }else{
            $poinRUP=$poinRUP+1;
        }

        if($o=="kurang12"){
            $poinIncre=$poinIncre+1;
            $poinScrum=$poinScrum+1;
            $poinIter=$poinIter+1;
            $poinXp=$poinXp+1;
        }else{
            $poinV=$poinV+1;
            $poinRUP=$poinRUP+1;
        }
        
        if($kemam=="pengalaman"){
            $poinV=$poinV+1;
            $poinScrum=$poinScrum+1;
            $poinIter=$poinIter+1;
            $poinRUP=$poinRUP+1;
        }else if($kemam=="campuran"){
            $poinIncre=$poinIncre+1;
            $poinXp=$poinXp+1;
        }else{

        }

        if($klien=="terlibat"){
            $poinIncre=$poinIncre+1;
            $poinScrum=$poinScrum+1;
            $poinXp=$poinXp+1;
            $poinIter=$poinIter+1;
            
        }else{
            $poinV=$poinV+1;
            $poinRUP=$poinRUP+1;
        }


    }else{
        $poinRAD=$poinRAD+1;
        $poinSpiral=$poinSpiral+1;
        $poinPro=$poinPro+1;
        $poinScrum=$poinScrum+1;
        $poinXp=$poinXp+1;
        $poinRUP=$poinRUP+1;

        if($komp=="sederhana"){
            $poinXp=$poinXp+1;
            $poinPro=$poinPro+1;
        }else if($komp=="kompleks"){
            $poinRAD=$poinRAD+1;
            $poinScrum=$poinScrum+1;
        }else{
            $poinSpiral=$poinSpiral+1;
            $poinRUP=$poinRUP+1;
        }

        if($w=="1"){
            $poinPro=$poinPro+1;
            $poinXp=$poinXp+1;
        }else if($w=="3"){
            $poinRAD=$poinRAD+1;
            $poinScrum=$poinScrum+1;
        }else if($w=="12"){
            $poinSpiral=$poinSpiral+1;
            $poinRUP=$poinRUP+1;
        }

        if($o=="kurang12"){
            $poinScrum=$poinScrum+1;
            $poinRAD=$poinRAD+1;
            $poinPro=$poinPro+1;
            $poinXp=$poinXp+1;
        }else{
            $poinSpiral=$poinSpiral+1;
            $poinRUP=$poinRUP+1;
        }
        
        if($kemam=="pengalaman"){
            $poinSpiral=$poinSpiral+1;
            $poinRAD=$poinRAD+1;
            $poinPro=$poinPro+1;
            $poinScrum=$poinScrum+1;
            $poinRUP=$poinRUP+1;
        }else if($kemam=="campuran"){
            $poinXp=$poinXp+1;
        }else{

        }

        if($klien=="terlibat"){
            $poinSpiral=$poinSpiral+1;
            $poinRAD=$poinRAD+1;
            $poinPro=$poinPro+1;
            $poinScrum=$poinScrum+1;
            $poinXp=$poinXp+1;
            
        }else{
            $poinRUP=$poinRUP+1;
        }
    }


    $jumlah = array("Prototyping"=>$poinPro,"Incremental"=>$poinIncre,"VShaped Model"=>$poinV,
    "Spiral"=>$poinSpiral,"Rapid Application Development"=>$poinRAD, "Scrum"=>$poinScrum, 
    "Extreme Programming"=>$poinXp, "Iterative"=>$poinIter,
     "Rational Unified Process"=>$poinRUP);
    arsort($jumlah);
    $hasil=array_splice($jumlah,0,3);
    return $hasil;
}

?>