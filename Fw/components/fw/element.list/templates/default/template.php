
<?php
//echo "<pre>";
//print_r($this->result);
//echo "</pre>";


echo "<div>Дефолтный шаблон новостей</div>";
$size = 0;
if (count($this->result)>$this->params["limit"]) {
    $size = $this->params["limit"];
} else {
    $size = count($this->result);
}

for ($i=0; $i<$size; $i++) {
    echo "<div class='default-news-list-item'>";
    echo "<h4 style='color: blue'> news id = ".$this->result[$i]['id']."</h4>";
    if($this->params["show_title"] == "Y") {
        echo "<h4>".$this->result[$i]['title']."</h4>";
    }
    echo "<p>".$this->result[$i]['decs']."</p>";
    echo "</div>";
}
