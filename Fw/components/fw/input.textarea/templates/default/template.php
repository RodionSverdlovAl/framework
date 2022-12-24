<?php
$params = $this->component->params;
//echo "<pre>";
//print_r($params);
//echo "</pre>";

use Core\InstanceContainer;
use Core\Application;
$app = InstanceContainer::get(Application::class);
?>
<p><?=$params['title']?></p>
<textarea
    name = "<?=$params["name"]?>"
    class = "<?=$params['additional_class']?>"
    placeholder="<?=$params['default']?>"
    <?php if(isset($params["attr"])) {
        foreach ($params["attr"] as $key=>$value){
            echo $key . "=". "$value ";
        }
    }?>
><?=$params['title']?></textarea>
