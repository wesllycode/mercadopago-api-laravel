<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Status de Pagamento Por Pix</title>
</head>
<body>

    <div id="statusScreenBrick_container"></div>    
   
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
          const mp = new MercadoPago('APP_USR-36dcab6e-b30e-4c4a-86d6-c0839ff78c40');
          const bricksBuilder = mp.bricks();
    </script>    
    <script>
        const renderStatusScreenBrick = async (bricksBuilder) => {
 const settings = {
   initialization: {
     // paymentId: '59787233384', // id do pagamento a ser mostrado
     paymentId: '59805077766', // id do pagamento a ser mostrado
   },
   callbacks: {
     onReady: () => {
       /*
         Callback chamado quando o Brick estiver pronto.
         Aqui você pode ocultar loadings do seu site, por exemplo.
       */
     },
     onError: (error) => {
       // callback chamado para todos os casos de erro do Brick
       console.error(error);
     },  
     customization: {
        backurls: {           
           'return': '<http://mercadopago.test/>',
           'error': '<http://<seu dominio>/error>',
        },
        
    }    
   },   
  };
  window.statusScreenBrickController = await bricksBuilder.create(
   'statusScreen',
   'statusScreenBrick_container',
   settings,
  );  
};
renderStatusScreenBrick(bricksBuilder);
</script>
</body>
</html>