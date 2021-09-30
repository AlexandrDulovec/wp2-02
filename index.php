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
<label for="castka">Vyber:</label>
<select name="castka" id="castka">
  <option value="czk_eur"> Koruny na Eura</option>
  <option value="eur_czk">Eura na Koruny</option>
  <option value="czk_usd">Koruny na Dolary</option>
  <option value="usd_czk">Dolary na Koruny</option>
  <option value="czk_rub">Koruny na Rubůy</option>
  <option value="rub_czk">Rubly na Koruny</option>
  <option value="czk_gbp">Koruny na Libry</option>
  <option value="gbp_czk">Libry na Koruny</option>
  <option value="gbp_eur">Libry na Eura</option>
  <option value="eur_gbp">Eura na Libry</option>
  <option value="gbp_rub">Libry na Rubly</option>
  <option value="rub_gbp">Rubly na Libry</option>
  <option value="usd_eur">Dolary na Eura</option>
  <option value="eur_usd">Eura na Dolary:</option>
  <option value="gbp_usd">Libry na Dolary</option>
  <option value="usd_gbp">Dolary na Libry</option>
  <option value="usd_rub">Dolary na Rubly</option>
  <option value="rub_usd">Dolary na Libry</option>
  <option value="eur_rub">Rubly na Eura</option>
  <option value="rub_eur">Eura na Rubly</option>
  <option value="eur_czk">Koruny na Eura</option>
  <option value="czk_eur">Eura na Koruny</option>
  <option value="czk_usd">Koruny na Dolary</option>
  <option value="usd_czk">Dolary na Koruny</option>
  <option value="czk_rub">Koruny na Rubly</option>
  <option value="rub_czk">Rubly na Koruny</option>
  <option value="czk_gnp">Koruny na Libry</option>
  <option value="gbp_czk">Libry na Koruny</option>
  <option value="gbp_eur">Libry na Eura</option>
  <option value="eur_gbp">Eura na Libry</option>
  <option value="gbp_rub">Libry na Rubly</option>
  <option value="rub_gbp">Rubly na Libry</option>
  <option value="usd_eur">Dolary na Eura</option>
  <option value="eur_usd">Eura na Dolary</option>
  <option value="gbp_usd">Libry na Dolary</option>
  <option value="usd_gbp">Dolary na Libry</option>
  <option value="usd_rub">Dolary na Rubly</option>
  <option value="rub_usd">Rubly na Dolary</option>
  <option value="eur_rub">Rubly na Eura</option>
  <option value="rub_eur>Eura na Rubly</option>
</select>
<br>
<input type= "submit" value="Odeslat" name="submit">
</form>
<?php
} ?>
</body>