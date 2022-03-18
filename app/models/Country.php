<?php

class Country
{
    function getCountriesFormatted(): string
    {
        $result = $this->getCountries();
        $table = "";

        foreach ($result as $country) {
            $pop = number_format($country->population, 0, ",", ".");
            $table .= "<tr>
                <td>$country->id</td>
                <td>$country->name</td>
                <td>$country->capitalCity</td>
                <td>$country->continent</td>
                <td>$pop</td>
            </tr>";
        }

        return $table;

    }

    function getCountries()
    {
        $conn = new Database();
        $conn->query('SELECT * FROM country');

        return $conn->resultSet();
    }
}