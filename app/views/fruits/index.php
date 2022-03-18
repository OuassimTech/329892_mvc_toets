<h1>Fruit overzicht</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Naam</th>
        <th>Kleur</th>
        <th>Prijs</th>
    </tr>
    <tr>
        <?php
        foreach ($data['fruitData'] as $fruit) {
            echo"<td>" . $fruit->id . "</td>";
            echo"<td>" . $fruit->name . "</td>";
            echo"<td>" . $fruit->color . "</td>";
            echo"<td>" . $fruit->price . "</td>";
        }
        ?>
    </tr>
</table>