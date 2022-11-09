<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styl.css" />

    <title>Document</title>
</head>
<body>

<div id="naglowek">
SZOPY WIELKIE I POTĘŻNE
</div>


<div id="lewy">
    <a href="www.szopy.com">Więcej szopów</a>
<br>    <a href="www.ciekawoski_o_szopach.com">ciekawoski o szopach</a>

</div>

<div id="prawo">
Oto najpotężniejsze szopy na świecie: <br>
    <?php 
    $conn = mysqli_connect ("localhost","root","","szopy");
    $wynik = mysqli_query($conn,"SELECT id,imie,lat FROM szop");
    $ilosc_wierszy= mysqli_num_rows($wynik);
    for ($i=0; $i<$ilosc_wierszy; $i++)
    {
        $id=mysqli_fetch_array($wynik);
        echo $id["id"]." imie ".$id["imie"]." ".$id["lat"]."<br>";
    };
    mysqli_close($conn);
    
    ?>
</div>
   
<div id="dol">
DAWID KRZEMIŃSKI
</div>

  

</body>
</html>