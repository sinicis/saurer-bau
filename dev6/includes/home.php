<?php
$mainTopics     = array("Hochbau","Tiefbau","Umbau/Anbau","Kundenmaurerei","Umgebungsarbeiten","Vorpl&auml;tze");
$topicCount     = count($mainTopics);
?>


<center>
    <b><font size='5'>Herzlich willkommen</font></b>

    </br></br>

    <?
    // print
    echo "<table>";

        for ( $i=1; $i<($topicCount+1); $i++) {
            echo "<tr>";
                echo "<td align='center'>" . $mainTopics[$i-1] . "</td>";
                //echo "<td colspan='". $i . "'>-</td>";
                //echo "<td colspan='" . ($topicCount+1)-$i . "'>" . $mainTopics[$i-1] . "</td>";
            echo "</tr>";
        }

    echo "</table>";

    ?>

</br></br>

    <b>
    Flexibel / Dynamisch / Qualit&auml;tsbewusst / Preiswert</br></br>
    Ihre Bauunternehmung aus der Region</br>
    </b>

    </br></br>

    Saurer Bau GmBH Oberhofen<br />
    Schulthesserstrasse 2<br />
    3653 Oberhofen am Thunersee<br />
    +41 79 656 67 70<br />
    lorenz.saurer@bluewin.ch <br />
</center>
