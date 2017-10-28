<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Introducción'
	),
	array(
		0 => '¿Qué es el código BBCode?',
		1 => 'BBCode es una implementación especial del HTML, y la forma en la que se usa BBCode está determinada por La Administración. Además se puede deshabilitar la opción de BBCode en un mensaje, desactivando la casilla correspondiente en el formulario de mensajes. BBCode asimismo es similar en estilo al HTML, pero las etiquetas se encuentran encerradas entre corchetes [ y ] en lugar de &lt; y &gt; y ofrece un gran control sobre qué y cómo se visualiza algo. Dependiendo del estilo que utilice en su foro, verá que es mucho más fácil añadir BBCodes a sus mensajes desde el área superior de la interfaz del formulario de publicación. Seguramente encontrará la siguiente guía muy útil.'
	),
	array(
		0 => '--',
		1 => 'Formato de texto'
	),
	array(
		0 => '¿Cómo crear texto en negritas, cursiva o subrayado?',
		1 => 'BBCode incluye etiquetas que le permitirán  cambiar el estilo de los textos rápidamente. Esto se puede lograr del siguiente modo: <ul><li>Para crear un texto en negrita debe encerrarlo entre <strong>[b][/b]</strong>, ej. <br /><br /><strong>[b]</strong>Hola<strong>[/b]</strong><br /><br />se convierte en <strong>Hola</strong></li><li>Para subrayar hay que usar <strong>[u][/u]</strong>, por ejemplo:<br /><br /><strong>[u]</strong>Buenos Días<strong>[/u]</strong><br /><br />se convierte en <span style="text-decoration: underline">Buenos Días</span></li><li>Para escribir en cursiva utilice <strong>[i][/i]</strong>, ej.<br /><br />Esto es <strong>[i]</strong>¡Genial!<strong>[/i]</strong><br /><br />se convierte en Esto es <i>¡Genial!</i></li></ul>'
	),
	array(
		0 => '¿Cómo cambiar el color o tamaño de texto?',
		1 => 'Para cambiar el color o tamaño de un texto se pueden utilizar las siguientes etiquetas. Hay que tener en cuenta que la apariencia final del texto va a depender del sistema y navegador que esté usando: <ul><li>Para cambiar el color de un texto debe colocarlo entre <strong>[color=][/color]</strong>. Puede especificar el color utilizando su nombre (ej. rojo, azul, amarillo, etc.) o su código hexadecimal, ej. #FFFFFF, #000000. Por ejemplo, para crear un texto en color rojo puede usar:<br /><br /><strong>[color=red]</strong>¡Hola!<strong>[/color]</strong><br /><br />o<br /><br /><strong>[color=#FF0000]</strong>¡Hola!<strong>[/color]</strong><br /><br />ambos se convierten en <span style="color:red">¡Hola!</span></li><li>Para cambiar el tamaño del texto se debe seguir un camino similar utilizando <strong>[size=][/size]</strong>. Esta etiqueta depende de la plantilla utilizada por el foro y/o seleccionada por el usuario, pero lo recomendable es escribir el valor numérico del tamaño de texto en porcentaje, empezando por 20 hasta llegar a 200 (muy grande). Por ejemplo:<br /><br /><strong>[size=30]</strong>Pequeño<strong>[/size]</strong><br /><br />será <span style="font-size:30%;">Pequeño</span><br /><br />mientras que:<br /><br /><strong>[size=200]</strong>¡Grande!<strong>[/size]</strong><br /><br />será <span style="font-size:200%;">¡Grande!</span></li></ul>'
	),
	array(
		0 => '¿Puedo combinar las etiquetas de formato?',
		1 => 'Sí, por supuesto, por ejemplo para llamar la atención de alguien puede escribir:<br /><br /><strong>[size=200][color=red][b]</strong>¡MIREME!<strong>[/b][/color][/size]</strong><br /><br />se convierte en <span style="color:red;font-size:200%;"><strong>¡MIREME!</strong></span><br /><br />¡Recomendamos no escribir demasiados textos como el del ejemplo! Recuerde que, como usuario, debe usted asegurarse de que las etiquetas se encuentren correctamente cerradas. Por ejemplo, lo siguiente es incorrecto:<br /><br /><strong>[b][u]</strong>Esto está mal<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citando texto o código'
	),
	array(
		0 => 'Citar texto en las respuestas',
		1 => 'Hay dos formas de citar un texto, haciendo o no haciendo referencia.<ul><li>Cuando utiliza la función Citar para responder un tema, fíjese en que el texto es agregado a la ventana de respuesta, encerrado entre las etiquetas <strong>[quote=""][/quote]</strong>. ¡Este método le permite citar textos haciendo referencia al autor! Por ejemplo para citar un trozo de texto que ha redactado Mr. Blobby debe escribir:<br /><br /><strong>[quote="Mr. Blobby"]</strong>El texto que redactó Mr. Blobby va aquí<strong>[/quote]</strong><br /><br />El texto resultante añadirá automáticamente, "Mr. Blobby escribió:" antes del texto actual. Recuerde que <strong>es imprescindible</strong> incluir las comillas "" para encerrar el nombre del usuario citado. No es opcional.</li><li>El segundo método le permite citar un texto ocultando su autor. Para hacerlo debe encerrar el texto entre las etiquetas <strong>[quote][/quote]</strong>. En el mensaje verá que solamente se muestra el mensaje sin hacer referencia al autor.</li></ul>'
	),
	array(
		0 => 'Escribiendo código o texto de otro tamaño',
		1 => 'Si desea incluir alguna clase de código dentro de sus textos debe encasillarlo entre las etiquetas <strong>[code][/code]</strong>, ej.<br /><br /><strong>[code]</strong>"Esto es un código"<strong>[/code]</strong><br /><br />Todos los formatos incluidos entre las etiquetas <strong>[code][/code]</strong> son conservados al visualizar el mensaje. Se puede resaltar sintaxis PHP usando <strong>[code=php][/code]</strong> y es recomendable cuando se publican ejemplos de códigos en PHP, para mejorar su lectura.'
	),
	array(
		0 => '--',
		1 => 'Creando listas'
	),
	array(
		0 => 'Creando una lista desordenada',
		1 => 'BBCode soporta dos tipos de listas, ordenas y desordenadas. Son esencialmente iguales a las listas HTML. Una lista desordenada muestra cada ítem uno despúes del otro identificado con una viñeta. Para crear una lista desordenada debe utilizar <strong>[list][/list]</strong> definiendo cada item usando <strong>[*]</strong>. Por ejemplo, para crear una lista de sus colores favoritos, debe escribir:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Rojo<br /><strong>[*]</strong>Azul<br /><strong>[*]</strong>Amarillo<br /><strong>[/list]</strong><br /><br />Se generará la siguiente lista:<ul><li>Rojo</li><li>Azul</li><li>Amarillo</li></ul><br />Alternativamente, puede especificar estilo de viñeta a la lista con <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, o <strong>[list=square][/list]</strong>.'
	),
	array(
		0 => 'Creando una lista ordenada',
		1 => 'El segundo tipo de lista, la ordenada, le permite controlar qué va detrás de cada ítem (elemento). Para crear una lista ordenada debe usar <strong>[list=1][/list]</strong> para crear una lista numérica o en su caso <strong>[list=a][/list]</strong> una lista alfabética. Como en las listas desordenadas, los ítems deben ser identificados usando <strong>[*]</strong>. Por ejemplo: <br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ir de compras<br /><strong>[*]</strong>Comprar un PC nuevo<br /><strong>[*]</strong>Llevar el PC a arreglar cuando se rompe<br /><strong>[/list]</strong><br /><br />generará lo siguiente: <ol style="list-style-type: decimal;"><li>Ir de compras</li><li>Comprar un PC nuevo</li><li>Insultar al PC cuando se rompe</li></ol> Y para una lista alfabética usaría: <br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Primera respuesta posible<br /><strong>[*]</strong>Segunda respuesta posible<br /><strong>[*]</strong>Tercera respuesta posible<br /><strong>[/list]</strong><br /><br /> creando: <ol style="list-style-type: lower-alpha"><li>Primera respuesta posible</li><li>Segunda respuesta posible</li><li>Tercera respuesta posible</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Primera respuesta posible<br /><strong>[*]</strong>Segunda respuesta posible<br /><strong>[*]</strong>Tercera respuesta posible<br /><strong>[/list]</strong><br /><br />su resultado será<ol style="list-style-type: upper-alpha"><li>Primera respuesta posible</li><li>Segunda respuesta posible</li><li>Tercera respuesta posible</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Primera respuesta posible<br /><strong>[*]</strong>Segunda respuesta posible<br /><strong>[*]</strong>Tercera respuesta posible<br /><strong>[/list]</strong><br /><br />su resultado será<ol style="list-style-type: lower-roman"><li>Primera respuesta posible</li><li>Segundo respuesta posible</li><li>Tercera respuesta posible</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Primera respuesta posible<br /><strong>[*]</strong>Segunda respuesta posible<br /><strong>[*]</strong>Tercera respuesta posible<br /><strong>[/list]</strong><br /><br />su resultado será<ol style="list-style-type: upper-roman"><li>Primera respuesta posible</li><li>Segunda respuesta posible</li><li>Tercera respuesta posible</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Creando enlaces'
	),
	array(
		0 => 'Creando un hipervínculo a otro sitio',
		1 => 'phpBB BBCode soporta muchas maneras de crear enlaces a otro sitio.<ul><li>La primera de ella es utilizando las etiquetas <strong>[url=][/url]</strong>, cualquier cosa que escriba después del signo = será interpretado por el BBCode como una dirección URL. Por ejemplo para crear un enlace a phpBB.com puede escribir:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>¡Visite phpBB!<strong>[/url]</strong><br /><br />Se generará el siguiente enlace, <a href="https://www.phpbb.com/">Visite phpBB!</a> El enlace se abrirá en una nueva ventana o no, dependiendo de la configuración del navegador.</li><li>Si prefiere que el enlace aparezca como una simple dirección URL debe usar:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Se generará de esta forma lo siguiente, <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>phpBB incluye una característica llamada <em>Enlacess Mágicos</em>, con lo que se convertirá el enlace en una dirección URL automáticamente sin necesidad de utilizar ninguna etiqueta o incluso http://. Por ejemplo, escribiendo www.phpbb.com en su mensaje aparecerá <a href="http://www.phpbb.com/">www.phpbb.com</a> cuando lo publique.</li><li>Lo mismo ocurre con las direcciones de e-mail, puede utilizar las etiquetas:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />lo cual se visualizará <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> o puede simplemente escribir no.one@domain.adr dentro de su mensaje, convirtiéndose en un enlace.</li></ul> Puede incluir direcciones URL dentro de los demás BBCodes, como en <strong>[img][/img]</strong> (ver próxima explicación), <strong>[b][/b]</strong>, etc. Recuerde que debe asegurarse de que todas las etiquetas estén cerradas y ordenadas correctamente, por ejemplo:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">no</span> es correcto ya que puede llevar a que su mensaje sea eliminado, así que tenga cuidado.'
    ),
	array(
		0 => '--',
		1 => 'Publicando imágenes y archivos en mensajes'
	),
	array(
		0 => 'Agregando una imagen al mensaje',
		1 => 'phpBB BBCode incluye una etiqueta para poder incorporar imágenes en los mensajes. Dos cosas importantes para cuando utilices esta etiqueta son: a muchos usuarios les molesta ver un exceso de imágenes dentro de un mensaje y, segundo, éstas deben estar disponibles en Internet (no pueden existir solo en su PC, ¡a menos que se trate de un servidor web!). Para publicar una imagen debes encerrar su dirección URL entre las etiquetas <strong>[img][/img]</strong>. Por ejemplo:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />También puedes incluir la dirección URL de una imagen entre las etiquetas <strong>[url][/url]</strong> si así lo deseas, ej.<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />se convierte en:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>'
	),
	array(
		0 => 'Agregando archivos adjuntos al mensaje',
		1 => 'Los archivos adjuntos ahora pueden ser ubicados en cualquier parte de un mensaje utilizando el nuevo BBCode <strong>[attachment=][/attachment]</strong>, si la función está habilitada por La Administración del foro y si posee los permisos necesarios. Dentro de la pantalla donde escribas los mensajes encontrarás un botón para incluir los archivos adjuntados en el mismo.'
	),
	array(
		0 => '--',
		1 => 'Otros'
	),
	array(
		0 => '¿Puedo agregar mis propias etiquetas?',
		1 => 'Si pertenece a La Administración de este foro y posee los permisos apropiados, puedes agregar nuevos BBCodes desde el Panel del Administrador.'
	),
);
