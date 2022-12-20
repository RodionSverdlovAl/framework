
<?php
//echo "<pre>";
//print_r($this->result);
//echo "</pre>";
$result = $this->component->result;
$params = $this->component->params;

$size = 0;
if (count($result)>$params["limit"]) {
    $size = $params["limit"];
} else {
    $size = count($result);
}

for ($i=0; $i<$size; $i++) {
    echo "<div class='default-news-list-item'>";
    echo "<h4 style='color: blue'> news id = ".$result[$i]['id']."</h4>";
    if($params["show_title"] == "Y") {
        echo "<h4>".$result[$i]['title']."</h4>";
    }
    echo "<p>".$result[$i]['decs']."</p>";
    echo "</div>";
}
