Primer paso, descargar `giansalex/peru-consult-api` y ejecutarlo.

## Download

Descargar **peru-consult-api** desde Docker Hub.

`docker pull giansalex/peru-consult-api`{{execute}}

## Run

Iniciar un contendor con la imagen descargada, el cual correrá en el puerto 80 y el token _123456_.

`docker run -d -p 80:80 --name apirest_peru -e "API_TOKEN=123456" giansalex/peru-consult-api`{{execute}}
