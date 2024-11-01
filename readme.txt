=== Simple Image SEO ===

Contributors: fuentes7
Plugin Name: Simple Image SEO
Description: Permite mostrar el titulo y el texto alternativo de cada imagen, para las imagenes destacadas y las imagenes que son añadidos con ACF.
Tags: Images, Images SEO, SEO images, Simple Image SEO
Author: Miguel Fuentes
Author URI: https://kodewp.com
Requires at least: 5.2
Tested up to: 5.2.3
Stable tag: trunk
Version: 1.0
Requires PHP: 5.2
License: GPL v2 or later

== Descripcion ==

Este plugin permite mostrar los textos aternativos y los titulos que se le asigna a cada imagen que son añadidos cn ACF o Imagen destacada, es perfecto el uso a la hora de desarrollar.

**Caracteristicas**

* Permite mostrar los atributos ALT y TITLE de las imagenes que son agregados con ACF version Free y version PRO.
* Permite mostrar los atributos ALT y TITLE a las iamgenes destacadas que son subidos en las paginas o CPT.
* Completamente plug-and-play, no requiere configuración.
* Código limpio y ligero.


**Privacidad**

Este plugin no recopila ni almacena ningún dato de usuario. No establece ninguna cookie ni se conecta a ninguna ubicación de terceros. Por lo tanto, este plugin no afecta la privacidad del usuario de ninguna manera.

> Funciona perfectamente con o sin el editor de bloques Gutenberg


== Instalación ==

**Cómo instalar**

* Instala desde el repositorio buscandolo como "Simple Image SEO".
* Sube el plugin a tu sitio y actívalo.

[Más información sobre la instalación de plugins WP](https://codex.wordpress.org/Managing_Plugins#Installing_Plugins)

**A la hora de desarrollar**

> <?php echo wp_image_seo_acf(get_field('name-field-acf'), "image" ); ?>
> <?php wp_image_seo_thumbnail('full'); ?>

== Actualización ==

Simplemente haga clic en "Actualizar" en la pagina de plugins y deje que WordPress lo haga por usted automáticamente.

Nota: este plugin no agrega nada a su base de datos WP.


== Preguntas frecuentes ==

**¿Dónde están las capturas de pantalla?**

Este plugin funciona internamente sin necesidad de ajustes. ¡Entonces no hay capturas de pantalla para mostrar!


**¿Funciona esto para WP Multisite?**

Sí, este plugin funciona muy bien en Multisite.