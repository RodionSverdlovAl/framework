<?php
$params = $this->component->params;
use Core\InstanceContainer;
use Core\Application;
$app = InstanceContainer::get(Application::class);
?>

<p><?=$params['title']?></p>
    <div id = "multiple-text-form">
        <input
                id = "multiple-text-input-item"
                type="<?=$params["type"]?>"
                name = "<?=$params["name"]?>"
                class = "<?=$params['additional_class']?>"
                placeholder="<?=$params['default']?>"
            <?php if(isset($params["attr"])) {
                foreach ($params["attr"] as $key=>$value) {
                    echo $key . "=". "$value ";
                }
            }?>
        >
        </br>
    </div>
<p onclick="addNewTextInput()">Еще</p>

