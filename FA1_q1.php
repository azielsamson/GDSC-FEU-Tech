<?php
 $input = 1;
 $metricUnit[0][0] = " centimetre";
 $metricUnit[1][0] = " decimetre";
 $metricUnit[2][0] = " metre";
 $metricUnit[3][0] = " kilometre";
 $metricUnit[0][1] = " millimetres";
 $metricUnit[1][1] = " centimetres";
 $metricUnit[2][1] = " centimetres";
 $metricUnit[3][1] = " metres";
 $metricUnit[0][2] = " cm";
 $metricUnit[1][2] = " dm";
 $metricUnit[2][2] = " m";
 $metricUnit[3][2] = " km";
 $metricUnit[0][3] = " mm";
 $metricUnit[1][3] = " cm";
 $metricUnit[2][3] = " cm";
 $metricUnit[3][3] = " m";
 $metricMultiplier[0] = 10;
 $metricMultiplier[1] = 10;
 $metricMultiplier[2] = 100;
 $metricMultiplier[3] = 1000;
 $imperialUnit[0][0] = " foot";
 $imperialUnit[1][0] = " yard";
 $imperialUnit[2][0] = " chain";
 $imperialUnit[3][0] = " furlong";
 $imperialUnit[4][0] = " mile";
  $imperialUnit[0][1] = " inches";
 $imperialUnit[1][1] = " feet";
 $imperialUnit[2][1] = " yards";
 $imperialUnit[3][1] = " yards";
 $imperialUnit[4][1] = " yards";
 $imperialUnit[0][2] = " ft";
 $imperialUnit[1][2] = " yd";
 $imperialUnit[2][2] = " ch";
 $imperialUnit[3][2] = " fur";
 $imperialUnit[4][2] = " mi";
 $imperialUnit[0][3] = " in";
 $imperialUnit[1][3] = " ft";
 $imperialUnit[2][3] = " yd";
 $imperialUnit[3][3] = " yd";
 $imperialUnit[4][3] = " yd";
 $imperialMultiplier[0] = 12;
 $imperialMultiplier[1] = 3;
 $imperialMultiplier[2] = 22;
 $imperialMultiplier[3] = 220;
 $imperialMultiplier[4] = 1760;
 $metricToImperialUnit[0][0] = " millimetre";
 $metricToImperialUnit[1][0] = " centimetre";
 $metricToImperialUnit[2][0] = " metre";
 $metricToImperialUnit[3][0] = " metre";
 $metricToImperialUnit[4][0] = " metre";
 $metricToImperialUnit[5][0] = " kilometre";
 $metricToImperialUnit[6][0] = " kilometre";
 $metricToImperialUnit[0][1] = " inches";
 $metricToImperialUnit[1][1] = " inches";
 $metricToImperialUnit[2][1] = " inches";
 $metricToImperialUnit[3][1] = " feet";
 $metricToImperialUnit[4][1] = " yards";
 $metricToImperialUnit[5][1] = " yards";
 $metricToImperialUnit[6][1] = " miles";
 $metricToImperialUnit[0][2] = " mm";
 $metricToImperialUnit[1][2] = " cm";
 $metricToImperialUnit[2][2] = " m";
 $metricToImperialUnit[3][2] = " m";
 $metricToImperialUnit[4][2] = " m";
 $metricToImperialUnit[5][2] = " km";
 $metricToImperialUnit[6][2] = " km";
  $metricToImperialUnit[0][3] = " in";
 $metricToImperialUnit[1][3] = " in";
 $metricToImperialUnit[2][3] = " in";
 $metricToImperialUnit[3][3] = " ft";
 $metricToImperialUnit[4][3] = " yd";
 $metricToImperialUnit[5][3] = " yd";
 $metricToImperialUnit[6][3] = " mi";
 $metricToImperialMultiplier[0] = 0.03937;
 $metricToImperialMultiplier[1] = 0.3937;
 $metricToImperialMultiplier[2] = 39.37008;
 $metricToImperialMultiplier[3] = 3.28084;
 $metricToImperialMultiplier[4] = 1.09361;
 $metricToImperialMultiplier[5] = 1093.6133;
 $metricToImperialMultiplier[6] = 0.62137;
 $imperialToMetricUnit[0][0] = " inch";
 $imperialToMetricUnit[1][0] = " foot";
 $imperialToMetricUnit[2][0] = " yard";
 $imperialToMetricUnit[3][0] = " yard";
 $imperialToMetricUnit[4][0] = " mile";
 $imperialToMetricUnit[5][0] = " mile";
 $imperialToMetricUnit[0][1] = " centimetres";
 $imperialToMetricUnit[1][1] = " centimetres";
 $imperialToMetricUnit[2][1] = " centimetres";
 $imperialToMetricUnit[3][1] = " metres";
 $imperialToMetricUnit[4][1] = " metres";
 $imperialToMetricUnit[5][1] = " kilometres";
 $imperialToMetricUnit[0][2] = " in";
 $imperialToMetricUnit[1][2] = " ft";
 $imperialToMetricUnit[2][2] = " yd";
 $imperialToMetricUnit[3][2] = " yd";
 $imperialToMetricUnit[4][2] = " mi";
 $imperialToMetricUnit[5][2] = " mi";
 $imperialToMetricUnit[0][3] = " cm";
 $imperialToMetricUnit[1][3] = " cm";
 $imperialToMetricUnit[2][3] = " cm";
 $imperialToMetricUnit[3][3] = " m";
 $imperialToMetricUnit[4][3] = " m";
 $imperialToMetricUnit[5][3] = " km";
 $imperialToMetricMultiplier[0] = 2.54;
 $imperialToMetricMultiplier[1] = 30.48;
 $imperialToMetricMultiplier[2] = 91.44;
  $imperialToMetricMultiplier[3] = 0.9144;
 $imperialToMetricMultiplier[4] = 1609.344;
 $imperialToMetricMultiplier[5] = 1.609344;
?>
<!DOCTYPE html>
<html>
<head>
 <title>
 Formative 1 Problem 1
 </title>
 <style>
 <link rel="stylesheet" type="text/css">
 
 body{
 background-color: #0C1F2D;
 font-size: 16;
 padding: 0;
 margin: 0;
 }
 .topPanel{
 margin: 0;
 padding: 0;
 }
 .mainTitle{
 font-size: 1.5em;
 text-align: center;
 color: #364c87;
 }
 .secondPanel{
 margin: 0;
 padding: 0;
 }
 table{
 margin-left: auto;
 margin-right: auto;
 margin-top: 1em;
 padding: 0;
 width: 80%;
  text-align: center;
 border: 1px solid #285861;
 border-collapse: collapse;
 }
 th{
 font-family: 'Montserrat', sans-serif;
 font-size: 1.2em;
 border: 1px solid #285861;
 border-collapse: collapse;
 color: #00000;
 background-color: #e2ff08;
 }
 td{
 font-family: 'Montserrat', sans-serif;
 font-size: 1em;
 border: 1px solid #285861;
 border-collapse: collapse;
 color: #00000;
 }
 </style>
</head>
<body>
 <div class = "topPanel">
 <p class = "mainTitle">
 <?php
 echo "Measure Conversion Chart - Lengths (UK)"
 ?>
 </p>
 </div>

 <div class = "secondPanel">
 <table>
 <tr>
 <th colspan = "6">
 <?php echo "Metric Conversions" ?>
 </th>
 </tr>
 <?php
 for ($i = 0; $i < 4; $i++){
 echo "<tr>";
  echo "<td width = 20%>";
 echo $input . $metricUnit[$i][0];
 echo "</td>";
 echo "<td width = 5%>";
 echo "=";
 echo "</td>";
 echo "<td width = 25%>";
 echo ($input * $metricMultiplier[$i]). $metricUnit[$i][1];
 echo "</td>";
 echo "<td width = 20%>";
 echo $input . $metricUnit[$i][2];
 echo "</td>";
 echo "<td width = 5%>";
 echo "=";
 echo "</td>";
 echo "<td width = 25%>";
 echo ($input * $metricMultiplier[$i]). $metricUnit[$i][3];
 echo "</td>";
 echo "</tr>";
 }
 ?>
 </table>
 <table>
 <tr>
 <th colspan = "6">
 <?php echo "Imperial Conversions" ?>
 </th>
 </tr>

 <?php
 for ($i = 0; $i < 5; $i++){
 echo "<tr>";
 echo "<td width = 20%>";
 echo $input . $imperialUnit[$i][0];
  echo "</td>";
 echo "<td width = 5%>";
 echo "=";
 echo "</td>";
 echo "<td width = 25%>";
 echo ($input * $imperialMultiplier[$i]). $imperialUnit[$i][1];
 echo "</td>";
 echo "<td width = 20%>";
 echo $input . $imperialUnit[$i][2];
 echo "</td>";
 echo "<td width = 5%>";
 echo "=";
 echo "</td>";
 echo "<td width = 25%>";
 echo ($input * $imperialMultiplier[$i]). $imperialUnit[$i][3];
 echo "</td>";
 echo "</tr>";
 }
 ?>
 </table>
 <table>
 <tr>
 <th colspan = "6">
 <?php echo "Metric to Imperial Conversions" ?>
 </th>
 </tr>
 <?php
 for ($i = 0; $i < 7; $i++){
 echo "<tr>";
 echo "<td width = 20%>";
 echo $input . $metricToImperialUnit[$i][0];
 echo "</td>";
  echo "<td width = 5%>";
 echo "=";
 echo "</td>";
 echo "<td width = 25%>";
 echo ($input * $metricToImperialMultiplier[$i]). $metricToImperialUnit[$i][1];
 echo "</td>";
 echo "<td width = 20%>";
 echo $input . $metricToImperialUnit[$i][2];
 echo "</td>";
 echo "<td width = 5%>";
 echo "=";
 echo "</td>";
 echo "<td width = 25%>";
 echo ($input * $metricToImperialMultiplier[$i]). $metricToImperialUnit[$i][3];
 echo "</td>";
 echo "</tr>";
 }
 ?>
 </table>
 <table>
 <tr>
 <th colspan = "6">
 <?php echo "Imperial to Metric Conversions" ?>
 </th>
 </tr>
 <?php
 for ($i = 0; $i < 6; $i++){
 echo "<tr>";
 echo "<td width = 20%>";
 echo $input . $imperialToMetricUnit[$i][0];
 echo "</td>";
 echo "<td width = 5%>";
 echo "=";
  echo "</td>";
 echo "<td width = 25%>";
 echo ($input * $imperialToMetricMultiplier[$i]). $imperialToMetricUnit[$i][1];
 echo "</td>";
 echo "<td width = 20%>";
 echo $input . $imperialToMetricUnit[$i][2];
 echo "</td>";
 echo "<td width = 5%>";
 echo "=";
 echo "</td>";
 echo "<td width = 25%>";
 echo ($input * $imperialToMetricMultiplier[$i]). $imperialToMetricUnit[$i][3];
 echo "</td>";
 echo "</tr>";
 }
 ?>
 </table>
 <br>
 <br>
 </div>
</body>
</html>