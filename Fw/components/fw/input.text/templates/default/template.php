<?php
$params = $this->component->params;

//echo "<pre>";
//print_r($params);
//echo "</pre>";

?>
<input
    type="<?=$params["type"]?>"
    name = "<?=$params["name"]?>"
    class = "<?=$params['additional_class']?>"
    title="<?=$params['title']?>"
    placeholder="<?=$params['default']?>"
>
</br>
