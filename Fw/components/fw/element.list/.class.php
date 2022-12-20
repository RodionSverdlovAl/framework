<?php
use Core\Services\DatabaseHandler;
class ElementList extends \Core\Component\Base
{

//    result;  массив с результатом работы комопнента
//    $id;  строковый id компонента (в нашем случае my_list)
//    $params;  входящие параметры компонента
//   $template;  экземпляр класса шаблона компонента
//    $__path;  путь к файловой структуре компонент

    public function __construct($result, $id, $template_id, $params, $path)
    {
        parent::__construct($result, $id, $template_id, $params, $path);
    }

    public function executeComponent()
    {
        $this->template->result = DatabaseHandler::getInstance()::getItems();
        // TODO: Implement executeComponent() method.
        $this->template->render();
    }
}