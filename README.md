# apirest-laravel - Example
-Laravel Application

## Build

### create database 
name: apirest_laravel

### run migrations
php artisan migrate

### run seeders
php artisan db:seed

### run server
php artisan serve

### run factory
php artisan tinker
Articulo::factory()->count(10)->create()

## Description
API desarrollada en laravel 8 y base de datos MySQL, a fines de ejemplo.

## Routes
/**
    * @index Retorna el lista de productos en la base de datos (Descripción, Precio, Stock)
    * @store Almacena en la base de datos un nuevo producto
    * @update Actualiza información de un producto específico identificandolo por su id
    * @destroy Elimina un registro de la base de datos.
*/
Route::get('/articulos', [ArticuloController::class, 'index']);
Route::post('/articulos', [ArticuloController::class, 'store']);
Route::put('/articulos/{id}', [ArticuloController::class, 'update']);
Route::delete('/articulos/{id}', [ArticuloController::class, 'destroy']);

## Params
/**
    * @param id del producto en la base de datos
*/
Route::put('/articulos/{id}', [ArticuloController::class, 'update']);
Route::delete('/articulos/{id}', [ArticuloController::class, 'destroy']);


