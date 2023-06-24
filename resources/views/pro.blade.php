<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout Pro</title>
</head>
<body>


    <a href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=198208342-8a912c30-95a1-4ceb-b5c9-4a69a8baefa1">
        <button>
          Pagar com Mercado Pago
        </button>
      </a>
     <div id="wallet_container"></div>
 
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('APP_USR-36dcab6e-b30e-4c4a-86d6-c0839ff78c40');
        const bricksBuilder = mp.bricks();


                  
mp.bricks().create("wallet", "wallet_container", {
   initialization: {
       preferenceId: "198208342-f4cbc8ff-5b9a-459b-8723-2a31dd6e4858",     
       redirectMode: "self"
   },
});

  </script>
</body>
</html>