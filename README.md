<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel


Como entendi, usando o MercadoPago Bricks.

Primeiro eu mando um post para o endpoit para criar uma preferncia, essa preferencia vai com todos os dados, tipo de pagamento, valores, pessoa que comprou, data de expiração, é o mais completo.


Existe modo que captura os dados e processa nesse endpoint ( https://api.mercadopago.com/checkout/preferences), que é o checkout brincks (https://www.mercadopago.com.br/developers/pt/docs/checkout-bricks/payment-brick/default-rendering), ele criar página de captura de dados para mim e também dar opção de acompanhar os status
usando o status bricks(https://www.mercadopago.com.br/developers/pt/docs/checkout-bricks/status-screen-brick/introduction), só para funcionar de boa automatico para redicionar após o pagamento, precisar da sdk e não api apenas.


### Sobre formato da data
A data usa o formato ISO 8601: yyyy-MM-dd'T'HH:mm:ssz
Por padrão o mercado
 - O prazo de creditação está entre 1 dia e 2 dias úteis de acordo com o meio de pagamento escolhido. Por isso, recomendamos que você defina a data de expiração com no mínimo 3 dias de intervalo para garantir a realização do pagamento.