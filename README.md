<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Solo el admin pueden hacer CRUD de directores, guardias y prisioneros<br>

## Index (directores)
http://127.0.0.1:8000/api/v1/director<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/80c5bef9-6b7d-4fb6-b10a-8ee906f91837)

## Store
http://127.0.0.1:8000/api/v1/director/create<br>
{
      
      "first_name": "Maria",
      "last_name": "Belen",
      "username": "Maria Herrera",
      "email": "maria@mail.org",
      "personal_phone": "0958247430",
      "home_phone": "026626047",
      "address": "Hills River"
    }<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/75cb5ead-af52-4831-9c89-50a2e4f6ed52)
![image](https://github.com/BryanTnz/demo/assets/66330281/be5c4d8d-0f70-4d48-925c-58f2693fd813)
![image](https://github.com/BryanTnz/demo/assets/66330281/c026caf8-7533-43aa-8a65-fd5612404714)


## Update
http://127.0.0.1:8000/api/v1/director/7/update<br>
{
      
      "first_name": "Maria",
      "last_name": "Belen",
      "username": "Chelsea",
      "email": "mariabelen@mail.org",
      "personal_phone": "0958247430",
      "home_phone": "026626047",
      "address": "678 Hills River"
    }<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/568d6e31-54b2-40d3-8c12-621f738acf47)
![image](https://github.com/BryanTnz/demo/assets/66330281/6e2f9d7b-1a8a-4b5b-8819-a1134a7ed739)

## Show
http://127.0.0.1:8000/api/v1/director/7<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/36815a37-0a1f-4a6b-81d8-7fc3d2c95e9c)

## Destroy
http://127.0.0.1:8000/api/v1/director/21/destroy<br>
![image](https://github.com/BryanTnz/demo/assets/66330281/56143017-b635-44dd-bf62-0533db4a9f2a)
![image](https://github.com/BryanTnz/demo/assets/66330281/6488b7a3-c0e5-490d-b18c-95201f1ce57d)



