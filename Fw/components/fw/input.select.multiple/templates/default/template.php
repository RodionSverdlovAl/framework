<?php
$params = $this->component->params;
//echo "<pre>";
//print_r($params);
//echo "</pre>";

?>

<p><?=$params["title"]?></p>
<div id = "multiple-select-form">
    <select
        id = "multiple-select-input-item"
        name="<?=$params["name"]?>"
        class="<?=$params["additional_class"]?>"
        <?php if(isset($params["attr"])) {
            foreach ($params["attr"] as $key=>$value) {
                echo $key . "=". "$value ";
            }
        }?>
    >
        <?php for ($i=0;$i<count($params["list"]); $i++) { ?>
            <option
                <?php if(isset($params["list"][$i]["attr"])) {
                    foreach ($params["list"][$i]["attr"] as $key=>$value) {
                        echo $key . "=". "$value ";
                    }
                }?>
                value="<?=$params["list"][$i]['value']?>"
                <?php
                if (isset($params["list"][$i]['additional_class'])) {
                    ?>
                    class="<?=$params["list"][$i]['additional_class']?>"
                    <?php
                }
                ?>
                <?php
                if (isset($params["list"][$i]['selected'])) {
                    ?>
                    selected
                    <?php
                }
                ?>
            >
                <?=$params["list"][$i]["title"]?>
            </option>
        <?php }?>
    </select>
</div>

</br>
<p onclick="addNewSelectInput()">Еще</p>