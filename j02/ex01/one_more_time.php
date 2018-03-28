#!/usr/bin/php
<?php
function monthnum($num)
{
    $month = array("Janvier" => 1, "janvier" => 1,
                "Fevrier" => 2, "fevrier" => 2,
                "Mars" => 3, "mars" => 3,
                "Avril" => 4, "avril" => 4,
                "Mai" => 5, "mai" => 5,
                "Juin" => 6, "juin" => 6,
                "Juillet" => 7, "juillet" => 7,
                "Aout" => 8, "aout" => 8,
                "Septembre" => 9, "septembre" => 9,
                "Octobre" => 10, "octobre" => 10,
                "Novembre" => 11, "novembre" => 11,
                "Decembre" => 12, "decembre" => 12);
    return $month[$num];
}
if ($argc > 1)
{
    if (preg_match("/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)"
    ." ([1-2][0-9]|[0][1-9]|3[0-1]|[0-9])"
    ." ([Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre)"
    ." ([0-9]{4}) (0[0-9]|1[0-2]|2[0-3]):([0-5][0-9]):([0-5][0-9])/", $argv[1], $date))
    {
        date_default_timezone_set("Europe/Paris");
        print(mktime($date[5], $date[6], $date[7], monthnum($date[3]), $date[2], $date[4]));
    }
else
    print("Wrong Format");
echo "\n";
}
?>