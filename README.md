# Cantina FCEA

Aplicación Laravel que muestra cinco productos con precios en guaraníes.
Utiliza Docker Compose, MySQL y phpMyAdmin.

## Requisitos

- Docker Desktop iniciado.
- Ubuntu mediante WSL si se utiliza Windows.
- Puertos 8080, 8081 y 3308 disponibles.

## Primera ejecución

Abrir una terminal de Ubuntu dentro de la carpeta del proyecto.

1. Crear la configuración local:

```bash
cp .env.example .env
```

2. Construir e iniciar los servicios:

```bash
docker compose up -d --build
```

La aplicación instala las dependencias y genera APP_KEY automáticamente
si no existe una clave. La primera ejecución puede tardar varios minutos.

3. Consultar el progreso:

```bash
docker compose logs -f app
```

Cuando Apache indique “resuming normal operations”, presionar Ctrl+C.
Esto solo cierra la visualización de los registros.

4. Crear las tablas y cargar los cinco productos:

```bash
docker compose exec app php artisan migrate --seed
```

Si MySQL todavía está iniciando y aparece “Connection refused”,
esperar 30 segundos y repetir el comando.

## Accesos

- Productos: http://localhost:8080/productos
- Saludo: http://localhost:8080/hola
- phpMyAdmin: http://localhost:8081

Credenciales de MySQL para esta práctica local:

- Usuario: root
- Contraseña: secreto
- Base de datos: laravel
- Servidor desde DBeaver: 127.0.0.1
- Puerto desde DBeaver: 3308

Laravel se conecta internamente al servicio db por el puerto 3306.

## Productos iniciales

| Producto | Precio |
|---|---:|
| Chipa | Gs. 5.000 |
| Mbejú | Gs. 8.000 |
| Cocido | Gs. 4.000 |
| Empanada | Gs. 6.000 |
| Sándwich | Gs. 10.000 |

El seeder permite repetir la carga sin duplicar los productos por nombre.

## Uso diario

Iniciar:

```bash
docker compose up -d
```

Apagar conservando la base:

```bash
docker compose down
```

El volumen datos_db conserva los datos.
El comando docker compose down -v elimina ese volumen y su contenido.

## Archivos de configuración

Se incluye .env.example como configuración de ejemplo.
El archivo .env y la carpeta vendor están excluidos de Git.
Las dependencias se instalan mediante el script docker/iniciar.sh.