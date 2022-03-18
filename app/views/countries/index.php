<?php

?>

<h1>Countries</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Land</th>
        <th>Hoofdstad</th>
        <th>Continent</th>
        <th>aantalInwoners</th>
    </tr>


    <?php if (isset($data)) {

        echo htmlspecialchars_decode($data['countries']);
    } ?>

</table>
