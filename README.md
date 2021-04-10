
## Pasos para arrancar el proyecto localmente:
  - Clonar el repositorio desde github
  - Dentro de la carpeta raíz ejecutar composer install
  - Crear la base de datos y configurar el .env con el nombre y credenciales correspondientes
  - Ejecutar la migración mediante php artisan migrate
  - Finalmente ejecutar php artisan serve

## Manual de uso
  - El cliente será capaz de visualizar productos, generar órdenes y realizar checkout del producto seleccionado. 
    1. Al arrancar la aplicaicón dirigirse hacia el apartado de Registro
    2. Al finalizar el registro se visualizará la lista de productos, inicialmente no habrá registros, sin embargo se puede agregar productos directamente en BD para poder continuar el flujo.
    3. Al momento de seleccionar el producto la aplicación nos dirige hacia la pantalla de Generación de orden
    4. Dentro de dicha pantalla se colocarán los datos correspondientes para generar la orden
    5. Posteriormente se muestra la vista de resumen de orden, lista para generar el checkout.  
  


