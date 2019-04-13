<?php

use Illuminate\Database\Seeder;

class ArticulosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articulos')->delete();
        
        \DB::table('articulos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titulo' => 'Como toda una inversionista',
                'fecha_creacion' => 1545005725,
                'estado' => 1,
                'descripcion' => 'Haber crecido en una familia en la que se me permitió aprender sobre algunos temas de inversión me ha ayudado mucho hasta ahora.',
                'cuerpo' => 'A mi tía siempre le ha gustado este tema, con los ahorros de su trabajo ella primero compró un local y empezó a arrendarlo; ella me enseñó que en todos los negocios debes arriesgar un poco para ganar, pero ante todo siempre debes aprender.

En un comienzo fue muy bueno el arriendo, ya que empezó a recibir ganancias de forma muy rápida y esto no solo le permitió terminarlo de pagar, sino también ganar dinero que podría invertir nuevamente.

Pero llegó un momento dónde su inquilino no pudo seguir y mi tía se vio enfrentada a esperar que se arrendara de nuevo. Ella me cuenta que fue un tiempo difícil, pero eso la hizo identificar un error que había cometido; no era que no se arrendara, sino que solo tenía uno, es por eso que analizó que, si tendría dos o tres habría mayores probabilidades de arrendar, ahorrar, e invertir una y otra vez.

¡Y que creen! así lo hizo, con su mentalidad positiva que siempre la caracteriza, creció tan rápido que hoy en día ha logrado adquirir hasta siete inmuebles, eso sí, le ha llevado tiempo, pero lo ha logrado. 

Lo anterior, me hizo pensar en que yo también podría empezar de a poco, pero siempre orientada en multiplicar mi inversión, por eso he decidido tener mi primera fracción.',
                'categoria_blog_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'titulo' => 'Mi Comunidad inversionista',
                'fecha_creacion' => 1545005961,
                'estado' => 1,
                'descripcion' => 'Es interesante como puedes conocer muchas personas que tienen una visión clara de las finanzas, negocios, emprendimiento y sobre todo de las buenas cosas de la vida.',
                'cuerpo' => 'Es interesante como puedes conocer muchas personas que tienen una visión clara de las finanzas, negocios, emprendimiento y sobre todo de las buenas cosas de la vida.

Lo importante aquí es la educación, pero lo que más me gusta es conocer emprendedores. Tuve la oportunidad de haber conocido a quien proyectó e hizo posible que esto llamado Fracción saliera a la luz y se convierta para mí en un gran negocio, el cual considero que a nivel nacional será una gran oportunidad para que muchos inversionistas junior o expertos, logren obtener una rentabilidad mayor por un inmueble en fase de construcción.

El día que lo conocí, tuve la oportunidad de asistir a la reunión de una compañía que me había gustado mucho, pues mi tía había invertido allí en vivienda.

Se trataba de un club de inversión dónde enseñan de forma gratuita todo lo relacionado con finanzas, inversión, emprendimiento y muchas cosas más, ¡vaya que si saben!

Bueno, retomando, era un chico con bastantes ganas de emprender, hablaba con mucha autoridad y me parecía super interesante lo que explicaba sobre el tema de democratizar la inversión, hasta pensé que era el creador de esto y que creen… ¡si lo era!

Joven pero conocedor, sabía de lo que hablaba y eso me pareció una pieza clave para explicarme a mí y a todas las personas de mi edad como ser inversionistas. Sin embargo, lo que más me impactaba era como mi tía y otras personas que se veían que tenían experiencia en inversión estaban de acuerdo con él, eso sinceramente me generó mucha seguridad y comprendí que no era la edad, sino como uno puede llegar a tener alma de emprendedor.

Ese día, aprendí cosas puntuales como la importancia de conocer cuánta rentabilidad me genera un CDT (Certificado de Depósito a Término), así como anécdotas de personas que tienen inmuebles y han arrendado, lo cual es una buena opción, pero su rentabilidad o ganancia es un poco demorada ya que normalmente se da cuando finalice el pago del crédito al banco.

Y así, me habló de muchas cosas que explicaría por medio de webinars dentro de su plataforma digital, ya con más calma, ¡vaya que este tema si me gustó!

Espero que este inicio sea la clave de mi emprendimiento para poder seguir creciendo como inversionista, y que junto a Juan pueda comprender de< una forma más clara y rápida, como ser toda una inversionista y de seguro también mi tía estará allí.',
                'categoria_blog_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'titulo' => 'Crowdfunding, ¿qué es y cómo funciona?',
                'fecha_creacion' => 1545006116,
                'estado' => 1,
                'descripcion' => 'Hola a la comunidad Fracción, soy Juan.
Si al igual que yo, tienes un dinero destinado a invertir, pero no has decidido cómo o dónde hacerlo, permíteme contarte sobre el crowdfunding.',
                'cuerpo' => 'Partamos de una cosa, les voy a contar como sucedió todo: estábamos una tarde compartiendo con algunos amigos, por lo general se comparte una comida la cual le llamamos ´´hacer una vaca¨ es decir, todos ponen una parte para comprar algo más grande y así comer mucho más, es increíble como una cosa como esta hace tantos estómagos felices.
Pero cual es la idea allí, comprendí que al final para llegar a un resultado de estos todos deben de compartir o mejor aún reunir, y así empecé a identificar lo que era el Crowdfunding, mejor conocido en español como financiación en masa; un mecanismo que puede ser utilizado para financiar proyectos por medio de la recolección masiva de fondos que suman una mayor cantidad.
Así, muchos inversores como tú o yo, podrán acceder a oportunidades de mercados que normalmente son de difícil acceso, debido a sus altos montos de inversión.
¡Pero que carajos!, para hablarle menos e ir más al grano, un claro ejemplo son las inversiones inmobiliarias, en la cuales los únicos que podían financiar estos proyectos eran las personas con mayor poder adquisitivo o los bancos. 
Pero ahora, gracias al crowdfunding, entre todos podemos reunir dinero para invertir en construcción, respaldados por una empresa experta en el sector.
Así, es posible encontrar el mejor activo para participar en el proyecto, formalizar el proceso y vender las propiedades.
Por ejemplo, si tú tienes cierta cantidad de dinero, desde $5.000.000 en adelante, puedes invertirlo en la construcción de x edificio y cuando termine la edificación recibirás lo que invertiste más la rentabilidad que se generó en este periodo, teniendo en cuenta el porcentaje estipulado y el tiempo límite en el que decidiste participar. Desde un principio establecerás las normas a seguir en el proceso, los tiempos y las cantidades acordadas.
¿Qué si hay riegos?, que te digo, es claro que como todo en esta vida, en estos proyectos si la meta de recaudo no es alcanzada el dinero es devuelto a los inversionistas, así no se generarán perdidas. Igual me gusta ser claro en todo. 
Antes de invertir, investiga, evalúa las posibilidades y haz cuentas.',
                'categoria_blog_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'titulo' => 'Una perla en medio de muchas piedras',
                'fecha_creacion' => 1545006236,
                'estado' => 1,
                'descripcion' => 'Esa búsqueda no fue nada fácil, me tomó dos días de investigación y lectura hasta que ya mi cerebro se sobrecargó de información y como una computadora, se puso lento.',
                'cuerpo' => 'En esos dos días dormí muy poco y mis ojeras llegaban al piso, pero todo valió la pena. Lo que conseguí fue alentador me daba esperanza, pero aún tenía mis dudas, llamé a un amigo que sabía sobre el tema que había conseguido y nos reunimos en una cafetería famosa de mi ciudad, un lugar muy lindo con un ambiente maravilloso. 

Luego de adelantar nuestra agenda (echar chisme) pedimos un café y fui al grano, le dije: - ¿Qué es crowdfunding en el mundo real? No me hables desde los libros, hábleme desde tu experiencia. Él se soltó a reír, al parecer le hizo gracia mi modo de preguntar (aquí es donde me río) y comenzó a contarme. 

-“pues Eri, el crowdfunding es algo muy amplio hoy en día, es una forma de financiar proyectos y buenas causas a través del capital privado, o sea, un grupo de personas (inversionistas) deciden aportar su dinero (invertir) en proyectos, causas o empresas en las cuales ven una proyección de crecimiento, con el fin de obtener ganancias, bueno, esto solo en empresas y proyectos, porque en campañas y obras benéficas no reciben un bien tangible, sino la satisfacción de haber apoyado un proyecto que cambió vidas o ayudó al planeta”.

Semejante discurso, pero bueno, entendí. Para mi caso específico el crowdfunding de obras benéficas y campañas no era lo que buscaba, la charla giró en torno a este tema por unos 30 minutos más o menos. Luego seguimos hablando de proyectos y metas a futuro que me hicieron recobrar mi esperanza y ganas de seguir adelante. Después de un rato nos despedimos y me fui a la casa de mis padres. 

Mi hermana mayor quien trabaja en un banco, me habló de CDT´s y cuentas de ahorro, pero lo que oí me hizo sentir muy insegura, un CDT’s no me garantiza nada, quienes invierten en ello son muy pocas personas, en serio, muy pocas y la cuenta de ahorros, bueno, ya tenía una y se estaba diluyendo. 

Cuando todos se fueron a dormir, subí a mi vieja habitación para volver a preguntarle a San Google, quien lo sabe todo. Y cómo había buscado antes ahora todo me salía frente a mis narices, la internet es increíble. 

Aquí fue donde encontré la perla que tanto buscaba, en medio de muchas piedras…',
                'categoria_blog_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'titulo' => 'Esto era solo el comienzo…',
                'fecha_creacion' => 1545006316,
                'estado' => 1,
                'descripcion' => 'Entre más leía, más interesante me parecía, EL CROWDFUNDIG INMOBILIARIO, era todo eso que me dijo mi amigo, pero en el mundo de las inversiones inmobiliarias. Fusionaba ese modelo viejo que usaba mi tía con la era moderna en la que vivimos actualmente.',
                'cuerpo' => 'Esto era solo el comienzo o como dicen por ahí, la punta del iceberg. ¿Saben cuántas plataformas de Crowdfunding Inmobiliario hay en el mundo? ¡OMG! Demasiadas, muchas. Me estaba volviendo loca, en medio te todo eso encontré un video en el que salía un chico hablando de un proyecto relacionado con el tema y era en mi ciudad, Cúcuta. 

Para quienes no la conocen, es una ciudad colombiana que está creciendo y es a nivel nacional, la ciudad con mayor valorización inmobiliaria, ¿qué buen dato, ¿no? 

Bueno, en el video hablaba muy bien del proyecto y quedé con muchas dudas (lo normal), entonces me fui a su página web y ¡Voilá!, ahí lo encontré. El Crowdfunding Constructor, una ramita del Crowdfunding inmobiliario, ¿se parecen?, solo en el sector en que se desarrollan, pero son diferentes. 

Este va más hacia proyectos inmobiliarios en proceso o planes de construcción, los profesionales expertos en el tema te asesoran en el proyecto que es más viable para ti según tu inversión, escoges el que más rentabilidad te dará y comienzas a invertir. Esto fue lo que entendí de mi investigación y el video que vi del chico hablando de la plataforma. Aún quería saber más, entonces me registré en la página web, les di mi WhatsApp. 
Al otro día a eso de las 10 am más o menos, ellos me enviaron un mensaje, preguntándome mis dudas respecto al tema y les pregunté de todo. ¿Cuáles eran sus tasas de rentabilidad? ¿En cuánto tiempo comenzaría a ver el retorno de mi inversión? Pregunté por asuntos legales, los cuales corroboré con un familiar especialista en estos temas y terminé incluso hablando con el fundador del proyecto. Él muy amablemente me invitó a tomar un café para explicarme todo sobre su plataforma y aclarar mis dudas. 

Decidí llevarme a mi tía Elena y a su mejor amiga Martha, ya que ambas se dedicaban a invertir en el mundo de la finca raíz y quería que se untaran un poco del tema y que hicieran preguntas, son bastante curiosas, por cierto. 

Ese día, tanto ellas como yo, nos encontramos con algo que jamás esperamos ver en nuestra ciudad y menos alguien joven fuese capaz de manejar con tanto éxito un proyecto como…',
                'categoria_blog_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
            'titulo' => 'Home Sweet Home (hogar, dulce hogar)',
                'fecha_creacion' => 1545006629,
                'estado' => 1,
                'descripcion' => '¿Cómo escoger tu hogar especial? Fue la pregunta que me hice cuando estaba escogiendo el proyecto al que quería invertirle el resto de mi vida, mi propio hogar.',
                'cuerpo' => 'Visité demasiados apartamentos, todos hermosos con acabados espectaculares, su estructura y arquitectura inmaculada y perfecta; pero ninguno se sentía como mi hogar, quería hallar el indicado y así fue.
Para el último apartamento que visité, ya estaba cansada, creía que no iba a encontrar el apartamento que quería. Ese día al pasar por el umbral de la puerta principal, lo supe, ese era, se sentía cálido, acogedor, con la energía de hogar que buscaba. Está bien, me iba a vivir sola allí, pero no quería llegar después de un largo día afuera, a un lugar en el que no me sintiese inspirada. 
(Has que tu hogar se vea bonito y con ? / Así de fácil)
Pude encontrarlo gracias a una de las amigas que hice en Fracción, mi asesora de inversiones inmobiliarias. Ella dedicó parte de su tiempo a ayudarme a encontrar lo que tanto quería, cuando yo perdía mis ánimos, ella me los levantaba, me decía: “tienes un lugar destinado en este mundo y lo vamos a encontrar, no te preocupes, los bienes raíces siempre están en actualización y hay muchos proyectos nuevos que podemos visitar”
Aquí te muestro unas fotos de mi nuevo y dulce hogar, lo decoré a mi gusto, fui y compré todos los accesorios, algunos los cree yo misma; te puedo decir, que mi hogar no es solo un lugar de paredes de concreto, es mi lugar en el mundo, mi sitio de refugio y me define en mi máxima expresión.',
                'categoria_blog_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'titulo' => 'Como toda una inversionista',
                'fecha_creacion' => 1545007461,
                'estado' => 1,
                'descripcion' => 'Haber crecido en una familia en la que se me permitió aprender sobre algunos temas de inversión me ha ayudado mucho hasta ahora.',
                'cuerpo' => 'A mi tía siempre le ha gustado este tema, con los ahorros de su trabajo ella primero compró un local y empezó a arrendarlo; ella me enseñó que en todos los negocios debes arriesgar un poco para ganar, pero ante todo siempre debes aprender. En un comienzo fue muy bueno el arriendo, ya que empezó a recibir ganancias de forma muy rápida y esto no solo le permitió terminarlo de pagar, sino también ganar dinero que podría invertir nuevamente. Pero llegó un momento dónde su inquilino no pudo seguir y mi tía se vio enfrentada a esperar que se arrendara de nuevo. Ella me cuenta que fue un tiempo difícil, pero eso la hizo identificar un error que había cometido; no era que no se arrendara, sino que solo tenía uno, es por eso que analizó que, si tendría dos o tres habría mayores probabilidades de arrendar, ahorrar, e invertir una y otra vez. ¡Y que creen! así lo hizo, con su mentalidad positiva que siempre la caracteriza, creció tan rápido que hoy en día ha logrado adquirir hasta siete inmuebles, eso sí, le ha llevado tiempo, pero lo ha logrado. Lo anterior, me hizo pensar en que yo también podría empezar de a poco, pero siempre orientada en multiplicar mi inversión, por eso he decidido tener mi primera fracción.',
                'categoria_blog_id' => 1,
            ),
        ));
        
        
    }
}