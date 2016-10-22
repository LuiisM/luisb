# PSE TEST
Conexión al webservice PSE

[![](https://img.shields.io/badge/Status-dev-brightgreen.svg)](https://github.com/LuiisM/luisb)


## Instalación

     $ composer require luisb/pse

## Autenticación
Si no se provee de una autenticación, se tomara una por defecto.
*Parametro: 
```php
   $auth = array("login"=>value,"tranKey"=>value,"additional"=>array());

   $pse = new SoapService($auth);
```
 O
```php
   $pse = new SoapService();
```


## Uso
 
* Obtener la lista de los Bancos.
```php
   $pse->bankList();
```
* Empezar una transacción
```php
   $pse->beginTransaction($transaction);
```
* Empezar una transacción multicrédito
```php
   $pse->beginTransactionMulticredit($transaction);
```
* Obtener el estado de una transacción
```php
   $pse->findTransaction($transactionID)
```
## Pruebas
     $ composer test

## 
