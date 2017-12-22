<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name'=>'Arquitectura',
        	'description'=>'La arquitectura es el arte y la técnica de construcción de edificios, por lo que en sus realizaciones participa igualmente la ciencia, sobretodo la matemática y la estética.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
    
        DB::table('categories')->insert([
        	'name'=>'Pintura',
        	'description'=>'La pintura es el arte y la técnica de representar en una superficie plana cualquier objeto concreto visible o bien algo imaginario, sugerido por líneas y/o colores.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
    
        DB::table('categories')->insert([
        	'name'=>'Escultura',
        	'description'=>'La palabra Escultura procede del latín sculpere, “esculpir”. Es el arte de crear formas figurativas o abstractas, tanto en bulto como en relieve. Las obras escultóricas se expresan mediante formas sólidas, reales, volumétricas; pues ocupan un espacio tridimensional: tienen alto, ancho y profundidad.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
    
        DB::table('categories')->insert([
        	'name'=>'Grabado',
        	'description'=>'Arte de trazar un dibujo sobre una plancha de madera o metal sobre incisiones de tal modo que entintándola se puede estampar con ella el dibujo sobre papel u otra superficie en múltiples ejemplares. Son varias las técnicas de grabado, unas estrictamente manuales y otras con la ayuda de ácidos que atacan la plancha, aguafuerte, aguatinta, buril, mezzotinto, punta seca y xilografía.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
    
        DB::table('categories')->insert([
        	'name'=>'Fotografía',
        	'description'=>'Grafía. Del sustantivo ( ) con el doble sentido de escritura o descripción. ( ) arte de representar las imágenes de los objetos basado en la acción química de la luz.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
    
        DB::table('categories')->insert([
        	'name'=>'Literatura',
        	'description'=>'La palabra literatura proviene del término latino litterae, que hace referencia al conjunto de saberes para escribir y leer bien. El concepto está relacionado con el arte de la gramática, la retórica y la poética. La literatura es el arte que emplea como medio de expresión una lengua. También se utiliza el término para definir al conjunto de las producciones literarias de una nación, de una época o de un género (como la literatura persa, por ejemplo) y al conjunto de obras que tratan sobre un arte o una ciencia (literatura deportiva, literatura jurídica, etc.).',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
    
        DB::table('categories')->insert([
        	'name'=>'Música',
        	'description'=>'En un sentido estricto, podemos definir a la música como “sonido organizado”. En esta organización pueden combinarse multitud de recursos, desde sonidos disonantes y consonantes, elementos aleatorios. Compases y formas estrictas hasta cintas magnetofónicas, medios digitales e infinidad de fuentes productoras de sonido, como máquinas de vapor o el tráfico vehicular.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
    
        DB::table('categories')->insert([
        	'name'=>'Danza',
        	'description'=>'La danza es una expresión artística debido a que en ella se observa creación y expresión, además de la transmisión del mundo subjetivo que se objetiva en un producto que no persigue directamente la satisfacción de una necesidad utilitaria. Constituye un lenguaje (determinado social e históricamente) en donde el mensaje se transmite por medio de símbolos elaborados con el movimiento del cuerpo humano.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
    
        DB::table('categories')->insert([
        	'name'=>'Teatro',
        	'description'=>'La palabra teatro deriva del sustantivo theatron que significa: veo, miro y soy espectador, esto hace alusión al lugar desde donde el público contempla una acción. Si consideramos que el teatro es un punto de vista sobre un acontecimiento, definiremos al teatro como el arte de representar obras dramáticas a través de la voz y el cuerpo para interpretar personajes en acción.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);
    
        DB::table('categories')->insert([
            'name'=>'Cine',
            'description'=>'Su base es una industria que si bien está regida por parámetros comerciales, puede producir obras artísticas con su lenguaje. Es una forma de construir y comunicar realidades a través de imágenes que producen la ilusión de movimiento.',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);

/*
        DB::table('categories')->insert([
            'name'=>'',
            'description'=>'',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);

        DB::table('categories')->insert([
            'name'=>'',
            'description'=>'',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
        ]);

*/
    }
}
