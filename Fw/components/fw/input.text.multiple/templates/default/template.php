<?php
$params = $this->component->params;
use Core\InstanceContainer;
use Core\Application;
$app = InstanceContainer::get(Application::class);
?>

<p><?=$params['title']?></p>
<input
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
<button onclick="foo()">Еще</button>
