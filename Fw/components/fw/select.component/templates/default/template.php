<?php
$params = $this->component->params;
echo "<pre>";
print_r($params);
echo "</pre>";

?>

<select
    type="<?=$params["type"]?>"
    name="<?=$params["name"]?>"
    class="<?=$params["additional_class"]?>"
    title="<?=$params["title"]?>"

>
    <option>опция 1</option>
    <option>опция 2</option>
</select>
