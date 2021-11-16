# Plantilla casos de prueba

## ID
2 - 001

## Prioridad de prueba
Alta

## Subsección de código
Petición registrar

## Título prueba
Petición registrar con datos

## Descripción
Se evaluará la capacidad de recibir peticiones para registrar, con datos correctos

## Software utilizado para la prueba
PHPUnit

## Precondiciones
- Página web ejcutandoese
- PHPUnit instalado 

## Datos de prueba
- clave: 1232
- nombre: chocolate
- costo: 20.0
- tipo: Perecedero
## Procedimiento

> Pasos 

- 1 Dentro de la carpeta test crear un nuevo archivo 
- 2 Crear una nueva clase extendiendo a phpunit
- 3 Crear una funciíon llamada testPOST
- 4 Crear un cliente HTTP y configurarlo para enviar una petición POST
- 5 Agregar los datos de prueba en la parte de parámetros
- 6 Obtener la respuesta e interpretarka

## Resultado esperado

Página html devuelta que incluya en la lista el artículo agregado

## Resultado actual


## Estatus 
Pasado/Fallido

## Notas

## Post condiciones



