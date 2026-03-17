<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Telefon Raqamlar</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg,#4facfe,#00f2fe);
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
}

.table-box{
    width:500px;
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    margin-bottom:20px;
    font-weight:bold;
}

.table td{
    font-size:18px;
    font-weight:500;
}

.table tr:hover{
    background:#f1f7ff;
    transition:0.3s;
}
</style>

</head>
<body>

<div class="table-box">

<h2>📞 Telefon Raqamlar</h2>

<table class="table table-striped table-hover text-center">
<thead class="table-dark">
<tr>
<th>Raqamlar</th>
</tr>
</thead>

<tbody>

<?php
$telraqamlar=[
901245367,903567812,904781236,905236781,906812457,907451236,908623451,909734562,
901856234,903912478,904567123,905781234,906234875,907983421,908451276,909126783,
901347826,903268451,904123678,905678321,906781234,907234561,908345672,909456783,
901567894,903678945,904789156,905891267,906912378,907123489,908234590,909345601,
901456712,903567823,904678934,905789045,906890156,907901267,908012378,909123489,
901234890,903345901,904456012,905567123,906678234,907789345,908890456,909901567,
901012678,903123789];

foreach($telraqamlar as $telraqam){
    echo "<tr>";
    $telraqam=(string)$telraqam;
    $telraqam=substr($telraqam,0,2)." ".substr($telraqam,2,3)." ".substr($telraqam,5,2)." ".substr($telraqam,7,2);
    echo "<td>+998 ".$telraqam."</td>";
    echo "</tr>";
}
?>

</tbody>
</table>

</div>

</body>
</html>