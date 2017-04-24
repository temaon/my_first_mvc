<?php
/**
 * Created by IntelliJ IDEA.
 * User: tema_on
 * Date: 25.03.17
 * Time: 14:02
 */


// подключаем файлы ядра
require_once 'core/session/session.php';
require_once 'core/session/flash.php';
require_once 'errors/db_exception.php';
require_once 'errors/not_found_exception.php';
require_once 'core/db/db_connect.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';


/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/

require_once 'core/route.php';

try {
    Route::start(); // запускаем маршрутизатор
}catch (Exception $exception){
    $exception->action();

}
