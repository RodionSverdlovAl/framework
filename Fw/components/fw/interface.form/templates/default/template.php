<?php
$params = $this->component->params;
//echo "<pre>";
//print_r($params);
//echo "</pre>";

use Core\InstanceContainer;
use Core\Application;
$app = InstanceContainer::get(Application::class)
?>

<div class = "container <?=$params['additional_class']?>">
    <form method="<?=$params['method']?>" action="<?=$params['action']?>">
        <?php
            for($i=0;$i<count($params["elements"]);$i++){
                //echo  'fw:input.'.$params["elements"][$i]["type"] . "</br>"; // неймспейс:компонент
                $app->includeComponent(
                    'fw:input.'.$params["elements"][$i]["type"], // неймспейс:компонент
                    'default', // шаблон
                    $params["elements"][$i] // params
                );
            }
        $app->includeComponent(
            'fw:input.text.multiple', // неймспейс:компонент
            'default', // шаблон
            [
                'type' => 'text',
                'name' => 'login',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17'
                ],
                'title' => 'Логин',
                'default' => 'Введите имя'
            ],
        );
        $app->includeComponent(
            'fw:input.textarea', // неймспейс:компонент
            'default', // шаблон
            [
                'type' => 'textarea',
                'name' => 'textarea',
                'additional_class' => 'js-login',
                'attr' => [
                    'data-id' => '17'
                ],
                'title' => 'textarea',
                'default' => 'Введите имя'
            ],
        );
        ?>
    </form>
</div>
