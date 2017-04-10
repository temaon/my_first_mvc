<h1>Портфолио</h1>
<p>
<table>
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr>
        <td>Год</td>
        <td>Проект</td>
        <td>Описание</td>
    </tr>
    <?php
    foreach ($data as $row) {
        echo '<tr><td>' . $row->getYear() . '</td><td>' . $row->getSite() . '</td><td>' . $row->getDescription() . '</td></tr>';
    }

    ?>
</table>
</p>