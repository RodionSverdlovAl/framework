<?php
$params = $this->component->params;

//echo "<pre>";
//print_r($params);
//echo "</pre>";

?>
<span><?=$params["title"]?></span>
<input
    type="number"
    name="<?=$params["name"]?>"
    class="<?=$params["additional_class"]?>"
    title="<?=$params["title"]?>"
    <?php if(isset($params["attr"])) {
        foreach ($params["attr"] as $key=>$value){
            echo $key . "=". "$value ";
        }
     }?>
>
</br>