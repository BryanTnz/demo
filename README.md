<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## CRUD PABELLON
## Index 
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/ward<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/1c203ad5-e41c-4b0c-b12c-6355babd7113)


## Store
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/ward/create<br>
{
      "name": "Pabellon_demo",
      "location": "Noreste",
      "description": "Ullam tenetur error molestiae sunt et autem."} 
![image](https://github.com/BryanTnz/demo/assets/66330281/9d21ef7a-1aea-488f-b328-f5680cc7e63b)
![image](https://github.com/BryanTnz/demo/assets/66330281/e14ef536-8737-4c99-af07-81cdf2e1125b)


## Update
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/ward/7/update<br>
{
      "name": "Danyka Parkway",
      "location": "Ala sur",
      "description": "Ullam tenetur error molestiae sunt et autem."
    }<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/d44bd9a2-1b9e-4972-8094-046a71265ca5)
![image](https://github.com/BryanTnz/demo/assets/66330281/264b9552-aec5-4cc2-a0a6-a1c2d6c1a4ff)


## Show
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/ward/7<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/fc12cd6a-c47b-4086-b3c6-3ad40e0531ba)

## Destroy
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/ward/21/destroy<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/bcfd666c-146d-4d0f-8489-e0593c4ae61c)

## CRUD CARCELES
## Index 
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/jail<br>

![image](https://github.com/BryanTnz/demo/assets/66330281/9dc4e19f-2b21-4a17-9b81-e39ab9db32f2)

## Store
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/jail/create<br>
{
      "name": "Carcel_Uno",
      "code": "abc-15",
      "type": "low",
      "capacity": "5",
      "ward_id": "21",
      "description": "Ullam tenetur error molestiae sunt et autem."
    }<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/c3cc8255-39ab-48ba-a8f6-1fb3d4b9827e)
![image](https://github.com/BryanTnz/demo/assets/66330281/6f8bbd1d-3e1e-4f3f-9637-c4c6280ce0a0)

## Update
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/jail/7/update<br>
{
      "name": "Ebba Drive_siete",
      "code": "abc-17",
      "type": "Medium",
      "capacity": "5",
      "ward_id": "3",
      "description": "Ullam tenetur error molestiae sunt et autem."
    }<br>

![image](https://github.com/BryanTnz/demo/assets/66330281/3ae93eea-13bc-44b3-b206-76c5055ea0b8)
![image](https://github.com/BryanTnz/demo/assets/66330281/01a7f140-9a37-4c1e-9047-f40f1f4a6418)

## Show
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/jail/7<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/3bb45e34-77aa-4e53-8864-847f1c117072)


## Destroy
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/jail/21/destroy<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/6f09a3bf-bdbb-46dc-bf3a-53fffecc00f0)


## INDEX Asignacion guardias a pabellones
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/assignment/guards-and-wards<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/27caa059-eb48-44a9-8b8a-be5bc18c6203)

## Asignacion guardias a pabellones
Solo puede el director crear carceles y pabellones <br>
Indicar el numero del guardia y luego el numero de pabellon<br>
http://127.0.0.1:8000/api/v1/assignment/guard-to-ward/11/3<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/80b8913d-3c53-49cf-8456-56070ba165f1)


## INDEX Asignacion prisionero a carcel
Solo puede el director crear carceles y pabellones <br>
http://127.0.0.1:8000/api/v1/assignment/prisoners-and-jails<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/956fa704-1c5e-40f0-86dd-59006b6a0d8e)


## Asignacion prisioneros a cacel
Solo puede el director crear carceles y pabellones <br>
Indicar el numero del prisionero y luego el numero de la carcel<br>
http://127.0.0.1:8000/api/v1/assignment/prisoner-to-jail/16/2<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/99a90b39-c279-40fd-bb32-4ecf5ea1de1c)
