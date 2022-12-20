<?php

namespace Core\Component;
use Core\InstanceContainer;
use Core\Type\Server;
use Exception;
use Core\Application;
class Template // класс управления шаблоном компонента
{
    public  string $path; // путь к файловой структуре шаблона (абсолютный путь)
    public  string $relativePath; // url к файловой структуре шаблона (относительный путь)
    public  string $id; // строковый id шаблона (в нашем случае  default)

    public Base $component;


    public function render(string $page = "template")
    {
        $filePath = $this->path . '/' . $page . '.php';
        $resultModifier = "/result_modifier.php";
        $component_epilog = "/component_epilog.php";
        $css = '/style.css';
        $js = '/script.js';
        $app = InstanceContainer::get(Application::class);
        try {
            if(file_exists($this->path . $component_epilog)){
                require $this->path . $component_epilog;
            }
            if (file_exists($filePath)) {
                require $filePath;
            } else {
                throw new Exception("Файл шаблона не найден");
            }
            if(file_exists($this->path . $resultModifier)){
                require $this->path . $resultModifier;
            }
            if (file_exists($this->path . $css)) {
                $app::$pager::addCss($this->relativePath . $css);
            }
            if (file_exists($this->path . $js)) {
                $app::$pager::addJs($this->relativePath . $js);
            }
        } catch (Exception $exception) {
            echo $exception. "</br>";
        }
    }

    public function __construct(string $id, Base $component) //В конструкторе мы должны указать жёскую зависимость от компонента
    {
        $this->component = $component;
        $this->id = $id;
        $this->relativePath = "/Fw" . $component->path . "/templates/" . $this->id;
        $this->path = Server::getInstance()->get('DOCUMENT_ROOT') . $this->relativePath;
    }
}