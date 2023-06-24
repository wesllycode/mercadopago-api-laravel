<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Pro</title>
</head>
<body>
   
     <div id="wallet_container"></div>
 
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('APP_USR-8f904215-ba89-46f3-9d92-77e9d08884ec');
        const bricksBuilder = mp.bricks();


                  
mp.bricks().create("wallet", "wallet_container", {
   initialization: {
       preferenceId: "198208342-92b7774b-105d-45e8-9c99-ce2e1b6befca"
   },
});

  </script>
</body>
</html>