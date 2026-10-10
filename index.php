<?php 
include "calculation.php"
?>
<html>
    <h2>Calculate house electricity bill</h2>
</html>


    <body>
        <h2>Calculate House Electricity Bill</h2>

        <?php

        if($error !=""){
            echo "<p><b>Warning: </b>". $error . "</p>";
        }
        ?>

<div style="margin-bottom: 50px;">
        <table border="1">
            <tr>
                <th>Block Tariff (per month)</th>
                <th>Unit</th>
                <th>Rate</th>
</tr>
<tr>
    <td>For the first 200 kWh (1-200 kWh) per month</td>
    <td>200kwh</td>
    <td>0.218</td>
</tr>
<tr>
    <td>For the next 100 kWh (201 – 300 kWh) per month</td>
    <td>100kwh</td>
    <td>0.334</td>
</tr>
<tr>
    <td>For the next 300 kWh (301 – 600 kWh) per month</td>
    <td>300kwh</td>
    <td>0.516</td>
</tr>
<tr>
    <td>For the next 300 kWh (601 – 900 kWh) per month</td>
    <td>300kwh</td>
    <td>0.546</td>
</tr>
<tr>
    <td>For teh first 300 kwh (901 kwh onward) pre month</td>
    <td>901kwh oonward</td>
    <td>0.571</td>
</tr>
<tr>
    <td colspan="3">the minimum monthly charge is RM3.00</td>
</tr>

</table>
</div>

    <form method="post">
    Enter your first 200 kWh (1-200 kWh) per month :
    <input type="text" name="block1" value=""><br><br>
    
    Enter next 100 kWh (201 - 300 kWh) per month :
    <input type="text" name="block2" value=""><br><br>

    Enter next 300 kWh (301 - 600 kWh) per month :
    <input type="text" name="block3" value=""><br><br>

    Enter next 300 kWh (601 - 900 kWh) per month :
    <input type="text" name="block4" value=""><br><br>

    Enter next 100 kwh (901 kwh onward) per month :
    <input type="text" name="block5" value=""><br><br>

    <input type="submit" name="calculate" value="calculate">

    <input type="submit" name="reset" value="reset">


</form>



<?php

if($showBill){
            echo "<h3>Your Electricity Bill</h3>";

            echo "1 - 200 kWh: " . $block1 . "kwh x 0.218 = RM" . number_format($charge1, 2) . "<br>";
            echo "201 - 300 kWh: " . $block2 . "kwh x 0.344 = RM" . number_format($charge2, 2) . "<br>";
            echo "301 - 600 kWh: " . $block3 . "kwh x 0.516 = RM" . number_format($charge3, 2) . "<br>";
            echo "601 - 900 kWh: " . $block4 . "kwh x 0.546 = RM" . number_format($charge4, 2) . "<br>";
            echo "901 kWh onwards: " . $block5 . "kwh x 0.571 = RM" . number_format($charge5, 2) . "<br>";

            echo "<br>";

            //summary
            echo "Total Electricity Consumption: " . $totalKwh . " kWh<br>";
            echo "Total Charge: RM" . number_format($totalCharge, 2) . "<br>";
            echo "SST (6%): RM" . number_format($sst, 2) . "<br>";
            echo "<b>Total Current Bill: RM" . number_format($totalBill, 2) . "</b><br>";

        }
?>


</body>



