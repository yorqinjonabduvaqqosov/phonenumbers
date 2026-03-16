<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <table class="table">
    <th>raqamalar</th>
<?php
$telraqamlar=[
901245367,
903567812,
904781236,
905236781,
906812457,
907451236,
908623451,
909734562,
901856234,
903912478,
904567123,
905781234,
906234875,
907983421,
908451276,
909126783,
901347826,
903268451,
904123678,
905678321,
906781234,
907234561,
908345672,
909456783,
901567894,
903678945,
904789156,
905891267,
906912378,
907123489,
908234590,
909345601,
901456712,
903567823,
904678934,
905789045,
906890156,
907901267,
908012378,
909123489,
901234890,
903345901,
904456012,
905567123,
906678234,
907789345,
908890456,
909901567,
901012678,
903123789];
foreach($telraqamlar as $key => $telraqam){
    echo "<tr>";
    $telraqam=(string)$telraqam;
    $telraqam=substr($telraqam, 0, 2)." ".substr($telraqam, 2, 3)." ".substr($telraqam, 5, 2)." ".substr($telraqam,7,2);
    echo "<td>"."+998 ".$telraqam."</td>";
    echo "</tr>";
}
?>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>