# Docker y Docker-Compose

Ejemplo sencillo con un contenedor docker corriendo una api rest en flask.
Aplicación dividida en tres contenedores:
  - Vista con flask
  - Cliente soap con php + apache
  - Servidor SOAP con Java corriendo la app como un proceso. 

## Comenzando 🚀

Clonar el proyecto y listo!

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

Es necesario tener instalado **Docker** y **Docker-Compose**:
- *Windows*: Docker-Desktop si se soporta Hypervisor o Docker-tools en caso contrario. Ambos traen Docker-Compose.
- *Linux/Mac*: consultar la documentación oficial de Docker en **https://docs.docker.com**

*IMPORTANTE: este ejemplo fue testeado tanto con la instalación de Docker-tools para Windows como la de Docker para Linux. **Si se usa la Docker-tools, la instalación crea una VM y en cursos.html hay que apuntar a la IP de la VM**, en una instalación normal de Docker revisar a que dirección debe apuntarse corriendo: **docker-machine ip** y modificar **cursos.html** con la correspondiente ip en donde se llame al client de php. Si se corre este ejemplo en Linux dejando los valores por defecto, en cursos.html es suficiente **"localhost"** para referenciar al contenedor client de php.*


## Despliegue 📦

Ya con Docker y Docker-Compose instalados, solamente hay que correr los comandos necesarios:

- Para crear las imágenes por separado, situarse en el directorio donde esté el dockerfile y en consola correr: **docker build -t tagName .**
Donde tagName es el nombre que tendrá la imagen y el punto indica el directorio donde está el dockerfile

- Para correr la imagen: **docker run -it tagName**
  También se puede hacer un mapeo de los puertos con el parámetro -p: ejemplo --> **docker run -it -p 8000:80 tagName**

- Para construir las 3 imágenes del ejemplo SOAP, situarse en el directorio donde se encuentre el archivo *docker-compose.yaml* y en consola ejecutar: **docker-compose build**

- Para levantar los servicios construidos: **docker-composer up**

