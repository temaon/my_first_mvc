<h1>Панель администрирования</h1>
<p>
    Админка...
    <!--
    Пока что, отобразим здесь простой текст.
    Далее можно добавить в админку некоторый функционал.
    Например, WYSIWYG-редактор для изменения страниц сайта (видов).
    Тогда, этот вид будет содержать выпадающий список для выбора страницы, поле редактора, а также кнопку
    для сохранения изменений. А некоторое действие контроллера администрирования будет описывать логику редактирования страниц.
    -->
</p>
<form class="form-horizontal col-md-6 col-md-offset-3">
    <div class="form-group">
        <label class="col-sm-2 control-label" for="title">Title: </label>
        <input id="title" class="form-control" type="text" name="title">
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="title">Title: </label>
        <input type="text" class="form-control" name="year">
    </div>
    <input type="text" name="site">
    <textarea type="text" name="description"></textarea>
</form>