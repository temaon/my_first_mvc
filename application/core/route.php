<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 25.03.17
 * Time: 14:33
 */
/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/

class Route
{
    static function start()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        // получаем имя контроллера
        $controller_name = !empty($routes[1]) ? $routes[1] : 'Main';
        // получаем имя экшена
        $action_name = !empty($routes[2]) ? $routes[2] : 'index';

        // добавляем префиксы
        $model_name = $controller_name;
        $controller_class_name = 'Controller' . ucfirst($controller_name);
        $controller_name = 'controller_' . $controller_name;

        // подцепляем файл с классом модели (файла модели может и не быть)
        $model_file = strtolower($model_name) . '.php';
        $model_path = "../application/models/" . $model_file;

        if (file_exists($model_path)) {
            require_once $model_path;
        }

        // подцепляем файл с классом контроллера
        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "../application/controllers/" . $controller_file;

        if (!file_exists($controller_path)) {
            throw new NotFoundException();
        } else {
            require_once $controller_path;
        }


        // создаем контроллер
        $controller = new $controller_class_name;
        $action = $action_name;


        if (!method_exists($controller, $action)) {
            throw new NotFoundException();
        } else {
            $controller->$action();
        }

    }

}