<?php
$params = $this->component->params;

//echo "<pre>";
//print_r($params);
//echo "</pre>";

?>
<p><?=$params['title']?></p>
<input
    type="<?=$params["type"]?>"
    name = "<?=$params["name"]?>"
    <?php if(isset($params["attr"])) {
        foreach ($params["attr"] as $key=>$value){
            echo $key . "=". "$value ";
        }
    }?>
>
</br>