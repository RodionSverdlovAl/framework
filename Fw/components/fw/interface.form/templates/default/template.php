<?php
$params = $this->component->params;
echo "<pre>";
print_r($params);
echo "</pre>";

use Core\InstanceContainer;
use Core\Application;
$app = InstanceContainer::get(Application::class)
?>

<div class = "container <?=$params['additional_class']?>">
    <form method="<?=$params['method']?>" action="<?=$params['action']?>">
        <?php
            $app->includeComponent(
                'fw:input.text', // неймспейс:компонент
                'default', // шаблон
                $params["elements"][0] // params
            );
            $app->includeComponent(
                'fw:input.password',
                'default',
                $params["elements"][1] // params
            );
            $app->includeComponent(
                'fw:select.component',
                'default',
                $params["elements"][2]
            );
        ?>
    </form>
</div>
