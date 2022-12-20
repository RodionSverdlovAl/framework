<?php

namespace Core\Component;

abstract class Base
{
    public array $result; // массив с результатом работы комопнента
    public string $id; // строковый id компонента (в нашем случае my_list)
    public array $params; // входящие параметры компонента
    public Template $template; // экземпляр класса шаблона компонента
    public string $path; // путь к файловой структуре компонент

    abstract public function executeComponent();

    public function __construct($result, $id, $template_id, $params, $path) // заполнение свойств. Объявление шаблона
    {
        $this->result = $result;
        $this->id = $id;
        $this->params = $params;
        $this->path = $path;
        $this->template = new Template($template_id, $this);
    }
}