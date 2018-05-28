<?php


/**
 * Created by PhpStorm.
 * User: Vincent
 * Date: 2018/5/28
 * Time: 22:34
 */

echo "<table width='800' align='center' border='1'>";
echo "<caption><h3>100行10列</h3></caption>";
for($i=1;$i<=100;$i++){
    if($i % 2==0){
        $color='red';
    }else{
        $color='green';
    }
    echo "<tr bgColor='".$color."'  onmouseover=lrow(this) onmouseout=lcol(this)>";
    for($j=1;$j<10;$j++){
        echo "<td>";
        echo $j;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";


?>


<script>
    var color="";
    function lrow(obj){
        color=obj.bgColor;
        obj.bgColor="blue";
    }

    function lcol(obj){
        obj.bgColor=color;
    }

</script>
 
