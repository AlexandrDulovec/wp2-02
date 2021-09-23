<?php 
$amount = filter_input(INPUT_POST, 'amount');
$finalamount = 0 ;
define('EUR_CZK', 25);
define('USD_CZK', 21);
define('RUB_CZK', 0.3);
define('GBP_CZK', 29);

define('USD_EUR', 25);
define('RUB_EUR', 0.3);
define('GBP_EUR', 29);

define('RUB_GBP', 25);
define('USD_GBP', 21);


define('USD_RUB', 0.3);


$sub = filter_input(INPUT_POST, 'odeslat');
$switch =  filter_input(INPUT_POST, 'switch');
$convertfrom;
$convertto;
$text = "Převod úspěšně proběhnul: " ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Převod</title>
</head>
<body>
<br>
<?php
if (isset($sub)) {
    switch ($switch) {
        case 'czk_eur': 
            $finalamount = $amount / EUR_CZK ;
            $convertfrom = " CZK " ;
            $convertto = " EUR " ;
                break;
       case 'czk_usd': 
                $finalamount = $amount / USD_CZK ;
                $convertfrom = " CZK " ;
                $convertto = " USD " ;
                break;
       case 'czk_gbp': 
                    $finalamount = $amount / GBP_CZK ;
                    $convertfrom = " CZK " ;
                    $convertto = " GBP " ;
                            break;
        case 'czk_rub': 
                    $finalamount = $amount / RUB_CZK;
                    $convertfrom = " RUB " ;
                    $convertto = " CZK " ;
                    break;

    case 'eur_czk': 
            $finalamount = $amount * EUR_CZK ;
            $convertfrom = " EUR " ;
            $convertto = " CZK " ;
            break;
    case 'eur_usd':
            $finalamount = $amount * USD_EUR ;
            $convertfrom = " EUR " ;
            $convertto = " USD " ;
            break;
    case 'eur_rub': 
            $finalamount = $amount * RUB_EUR ;
            $convertfrom = " EUR " ;
            $convertto = " RUB " ;
            break;
    case 'eur_gbp': 
            $finalamount = $amount * GBP_EUR ;
            $convertfrom = " EUR " ;
            $convertto = " GBP " ;
            break;
     
    
    
    case 'usd_czk': 
            $finalamount = $amount * USD_CZK ;
            $convertfrom = " USD " ;
            $convertto = " CZK " ;
            break;
    case 'usd_eur': 
            $finalamount = $amount * USD_EUR ;
            $convertfrom = " USD " ;
            $convertto = " EUR " ;
            break;
    case 'usd_rub': 
            $finalamount = $amount * USD_RUB ;
            $convertfrom = " USD " ;
            $convertto = " RUB " ;
            break;
    
    case 'usd_gbp': 
            $finalamount = $amount * USD_GBP;
            $convertfrom = " USD " ;
            $convertto = " GBP " ;
            break;
    
     
    
    case 'rub_czk': 
            $finalamount = $amount * RUB_CZK ;
            $convertfrom = " USD " ;
            $convertto = " CZK " ;
            break;
    case 'rub_eur': 
            $finalamount = $amount * RUB_EUR ;
            $convertfrom = " US " ;
            $convertto = " EUR " ;
            break;
    case 'rub_usd': 
            $finalamount = $amount * USD_RUB ;
            $convertfrom = " USD " ;
            $convertto = " RUB " ;
            break;
    case 'rub_gbp': 
            $finalamount = $amount * GBP_EUR;
            $convertfrom = " USD " ;
            $convertto = " GBP " ;
            break;
    
    
    case 'gbp_czk': 
            $finalamount = $amount * GBP_CZK ;
            $convertfrom = " USD " ;
            $convertto = " CZK " ;
            break;
    case 'gbp_eur': 
            $finalamount = $amount * GBP_EUR ;
            $convertfrom = " US " ;
            $convertto = " EUR " ;
            break;
    case 'gbp_usd': 
            $finalamount = $amount * USD_GBP ;
            $convertfrom = " USD " ;
            $convertto = " RUB " ;
            break;
    case 'gbp_rub': 
            $finalamount = $amount * RUB_GBP;
            $convertfrom = " USD " ;
            $convertto = " GBP " ;
            break;   

  
                         }


$all =$text . $amount . $convertfrom . " = " . $final . $convertto ?>
<?= $all ?>
<?php
} else { ?>
<form action="index.php" method="post">
<br>
<h1>Převod</h1> <br> 
<label for="castka">Částka:</label> 
<input type="number" id="castka" name="castka"> <br> 
<br>
    Koruny na Eura: <input type="radio" name="switch" value="czk_eur" id="switch"><br>
    Eura na Koruny: <input type="radio" name="switch" value="eur_czk" id="switch"><br>
        <br>
    Koruny na Dolary: <input type="radio" name="switch" value="czk_usd" id="switch"><br>
    Dolary na Koruny: <input type="radio" name="switch" value="usd_czk" id="switch"><br>
        <br>
    Koruny na Rubly: <input type="radio" name="switch" value="czk_rub" id="switch"><br>
    Rubly na Koruny: <input type="radio" name="switch" value="rub_czk" id="switch"><br>
       <br>
    Koruny na Libry: <input type="radio" name="switch" value="czk_gbp" id="switch"><br>
    Libry na Koruny: <input type="radio" name="switch" value="gbp_czk" id="switch"><br>     
        <br>
    Libry na Eura: <input type="radio" name="switch" value="gbp_eur" id="switch"><br>
    Eura na Libry: <input type="radio" name="switch" value="eur_gbp" id="switch"><br>
        
    <br>        
    Libry na Rubly <input type="radio" name="switch" value="gbp_rub" id="switch"><br>
    Rubly na Libry: <input type="radio" name="switch" value="rub_gbp" id="switch"><br>
       
    <br>
    Dolary na Eura: <input type="radio" name="switch" value="usd_eur" id="switch"><br>
    Eura na Dolary: <input type="radio" name="switch" value="eur_usd" id="switch"><br>
   <br>
    Libry na Dolary: <input type="radio" name="switch" value="gbp_usd" id="switch"><br>
    Dolary na Libry: <input type="radio" name="switch" value="usd_gbp" id="switch"><br>
   <br>
    Dolary na Rubly: <input type="radio" name="switch" value="usd_rub" id="switch"><br>
    Rubly na Dolary: <input type="radio" name="switch" value="rub_usd" id="switch"><br>
   <br>
    Rubly na Eura: <input type="radio" name="switch" value="eur_rub" id="switch"><br>
    Eura na Rubly: <input type="radio" name="switch" value="rub_eur" id="switch"><br>
<br>
<input type= "submit" value="Odeslat" name="submit">
</form>
<?php
} ?>
</body>