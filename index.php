<?php
	include(dirname(__FILE__).'/conf.php');

	$firma = "$ApiKey~$merchantId~$referenceCode~$amount~$currency";
	$firmaMd5 = md5($firma);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario demo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

	<form class="flex flex-col w-[400px] h-screen p-12" method="post" action="<?php echo $url; ?>">
	  <input class="border border-black h-12" name="merchantId"    	value="<?php echo $merchantId; ?>" ><br>
	  <input class="border border-black h-12" name="accountId"     	value="<?php echo $accountId; ?>" ><br>
	  <input class="border border-black h-12" name="description"   	value="<?php echo $description; ?>" ><br>
	  <input class="border border-black h-12" name="referenceCode" 	value="<?php echo $referenceCode; ?>" ><br>
	  <input class="border border-black h-12" name="amount"        	value="<?php echo $amount; ?>" ><br>
	  <input class="border border-black h-10" name="tax"           	value="<?php echo $tax; ?>" ><br>
	  <input class="border border-black h-10" name="taxReturnBase" 	value="<?php echo $taxReturnBase; ?>" ><br>
	  <input class="border border-black h-10" name="currency"      	value="<?php echo $currency; ?>" ><br>
	  <input class="border border-black h-10" name="signature"     	value="<?php echo $firmaMd5; ?>" ><br>
	  <input class="border border-black h-10" name="test"          	value="<?php echo $test; ?>" ><br>
	  <input class="border border-black h-10" name="buyerEmail"    	value="<?php echo $buyerEmail; ?>" ><br>
	  <input class="border border-black h-10" name="responseUrl"    value="<?php echo $responseUrl; ?>" ><br>
	  <input class="border border-black h-10" name="confirmationUrl" value="<?php echo $confirmationUrl; ?>" ><br>
	  <input name="Submit" type="submit" value="Enviar" >
	</form>

</body>
</html>