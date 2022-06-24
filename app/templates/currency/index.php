<div>
    <a href="/">Главная</a>
    <a href="/currency">Курсы валют</a>
</div>

<h2>CURRENCY PAGE</h2>

<table>
    <tr>
        <th>Код</th>
        <th>Название</th>
        <th>Курс</th>
    </tr>
    <?php
    foreach ($currency as $item) {
        echo '<tr>';
        echo '<td>' . $item['CharCode'] . '</td>';
        echo '<td>' . $item['Name'] . '</td>';
        echo '<td>' . $item['Value'] . '</td>';
        echo '</tr>';
    }

    ?>
</table>
