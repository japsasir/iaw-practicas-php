# iaw-practicas-php
Ejercicios con PHP.

> IES Celia Viñas (Almería) - Curso 2020/2021
Módulo: IAW - Implantación de Aplicaciones Web
Ciclo: CFGS Administración de Sistemas Informáticos en Red

**Introducción**
------------
En esta práctica vamos a realizar diversas prácticas con el lenguaje PHP a modo de introducción. Los ejercicios estarán separados por secciones (Debemos seguir el orden especificado en los contenidos) y contarán con anotaciones para simplificar la exposición o el repaso de los mismos.

**Metodología**
------------

He creado una instancia de Amazon 'Ubuntu Server 20.04' *freetier* con los puertos relevantes abiertos (80, 22). Despues he descargado allí el repositorio y lanzado el script docker.sh (desde el directorio) para instalar los componentes necesarior, lanzar un **contenedor de docker con apache** y enlazar su volumen al del repositorio (Pudiendo hacer pruebas y ver el resultado de manera instantánea en el navegador)
![Directorio](https://i.imgur.com/H8uqqif.png)
*Script de lanzamiento de contenedor docker. Ya incluido en el script docker.sh*

![Directorio](https://i.imgur.com/sHYmARO.png1)
Para poder navegar por los directorios he creado un archivo **htaccess** muy sencillo que muestra los directorios y ocultra los archivos que no son relevantes para la evaluación de la práctica.

![Comentando lineas](https://i.imgur.com/6jtAVJU.png)
Durante la realización de los ejercicios he dejado anotaciones a modo de documentación, con algún enlace a la documentación de php en puntos clave.

![Usando git](https://i.imgur.com/901HGAZ.png)

Para actualizar el repositorio se han usado los siguientes comandos
`git add *`
`git commit -m "Comentario relevante"`
`git push`

Actualmente se pueden ver los contenidos en la siguiente IP: `http://54.175.190.164/`
![Lanzador de tibudolares](https://i.imgur.com/mPmyfQW.png)
*Los formularios son interactivos.*

**Archivos y directorios en el repositorio**
------------
1. **README**                               Documentación.
2. **/estructuras_de_control**                                          
3. **/bucles**                             
4. **/arrays_y_bucles**             
5. **/funciones**                        
6. **/formularios**                          
7. **docker.sh**	Automatización de la instalación de docker y lanzamiento del contenedor
8. **htaccess**		Configuración de acceso del sitio web


**Referencias**
------------
- Guía original para la práctica.
https://josejuansanchez.org/iaw/practica-php/index.html#ejercicios---funciones
- Cursos de OpenWebinars relacionados
Básico      https://openwebinars.net/academia/aprende/curso-php-2019/
Php y MySQL https://openwebinars.net/academia/portada/php-mysql/
- Documentación PHP
https://www.php.net/manual/es/function.key.php
- Espacio de pruebas con PHP
https://www.tehplayground.com/QkowN2xDuKAIYAQw

**Editor Markdown**
------------
- Markdown editor.
https://markdown-editor.github.io/