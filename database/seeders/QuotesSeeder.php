<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quote::unguard();

        Quote::create(['message'=>'No hay hombre tan cobarde a quien el amor no haga valiente y transforme en héroe. ','author'=>'Platón.','owner'=>1]);
        Quote::create(['message'=>'Hay alguien tan inteligente que aprende de la experiencia de los demás. ','author'=>'Voltaire.','owner'=>1]);
        Quote::create(['message'=>'No puedo enseñar nada a nadie. Solo puedo hacerles pensar. ','author'=>'Sócrates.','owner'=>1]);
        Quote::create(['message'=>'Vivir sin filosofar es, propiamente, tener los ojos cerrados, sin tratar de abrirlos jamás. ','author'=>'René Descartes.','owner'=>1]);
        Quote::create(['message'=>'Lo menos frecuente en este mundo es vivir. La mayoría de la gente existe, eso es todo. ','author'=>'Oscar Wilde.','owner'=>1]);
        Quote::create(['message'=>'La felicidad de tu vida depende de la calidad de tus pensamientos. ','author'=>'Marco Aurelio.','owner'=>1]);
        Quote::create(['message'=>'La vida no se trata de encontrarte a ti mismo, sino de crearte a ti mismo. ','author'=>'Bernard Shaw.','owner'=>1]);
        Quote::create(['message'=>'Pensar es fácil, actuar es difícil, y poner los pensamientos de uno mismo en acción es lo más difícil del mundo. ','author'=>'Goethe.','owner'=>1]);
        Quote::create(['message'=>'Felicidad no es hacer lo que uno quiere sino querer lo que uno hace. ','author'=>'Jean Paul Sartre.','owner'=>1]);
        Quote::create(['message'=>'No lastimes a los demás con lo que te causa dolor a ti mismo. ','author'=>'Buda.','owner'=>1]);
        Quote::create(['message'=>'El hombre que mueve montañas empieza apartando piedras pequeñas. ','author'=>'Confucio.','owner'=>1]);
        Quote::create(['message'=>'Educa a los niños y no será necesario castigar a los hombres. ','author'=>'Pitágoras de Samos.','owner'=>1]);
        Quote::create(['message'=>'Los hombres geniales empiezan grandes obras, los hombres trabajadores las terminan. ','author'=>'Leonardo Da Vinci.','owner'=>1]);
        Quote::create(['message'=>'La verdadera libertad consiste en el dominio absoluto de sí mismo. ','author'=>'Galileo Galilei.','owner'=>1]);
        Quote::create(['message'=>'El regalo más grande que les puedes dar a los demás es el ejemplo de tu propia vida. ','author'=>'Bertolt Brecht.','owner'=>1]);
        Quote::create(['message'=>'Me he dado cuenta que incluso las personas que dicen que todo está predestinado y que no podemos hacer nada para cambiar nuestro destino igual miran antes de cruzar la calle. ','author'=>'Stephen Hawking.','owner'=>1]);
        Quote::create(['message'=>'Vivir es nacer a cada instante. ','author'=>'Erich Fromm.','owner'=>1]);
        Quote::create(['message'=>'No malgastes tu tiempo, pues de esa materia está formada la vida. ','author'=>'Benjamin Franklin.','owner'=>1]);
        Quote::create(['message'=>'¿Quieres ser rico? Pues no te afanes en aumentar tus bienes sino en disminuir tu codicia. Epicuro. ','author'=>'+','owner'=>1]);
        Quote::create(['message'=>'Las que conducen y arrastran al mundo no son las máquinas, sino las ideas. ','author'=>'(Victor Hugo)','owner'=>1]);
        Quote::create(['message'=>'Allí donde reinan la quietud y la meditación, no hay lugar para las preocupaciones ni para la disipación. ','author'=>'Francisco de Asís.','owner'=>1]);
        Quote::create(['message'=>'La vida debe ser comprendida hacia atrás. Pero debe ser vivida hacia delante. ','author'=>'Kierkegaard.','owner'=>1]);
        Quote::create(['message'=>'Todo el que disfruta cree que lo que importa del árbol es el fruto, cuando en realidad es la semilla. He aquí la diferencia entre los que crean y los que disfrutan. ','author'=>'Friedrich Nietzsche.','owner'=>1]);
        Quote::create(['message'=>'Al final no son los años en nuestra vida lo que cuenta, sino la vida en nuestros años. ','author'=>'Abraham Lincoln.','owner'=>1]);
        Quote::create(['message'=>'Hay tres frases que nos impiden avanzar: tengo que hacerlo bien, me tienes que tratar bien y el mundo debe ser fácil. ','author'=>'Albert Ellis.','owner'=>1]);
        Quote::create(['message'=>'La buena conciencia es la mejor almohada para dormir. ','author'=>'Sócrates.','owner'=>1]);
        Quote::create(['message'=>'Todo el mundo ve lo que aparentas ser, pocos experimentan lo que realmente eres. ','author'=>'Maquiavelo.','owner'=>1]);
        Quote::create(['message'=>'No es lo que te ocurre, sino cómo reaccionas lo que importa. ','author'=>'Epíteto.','owner'=>1]);
        Quote::create(['message'=>'Iré a cualquier parte, siempre que sea hacia adelante. ','author'=>'David Livingstone.','owner'=>1]);
        Quote::create(['message'=>'Qué pequeña eres brizna de hierba. Sí, pero tengo toda la Tierra a mis pies. ','author'=>'Rabindranath Tagore.','owner'=>1]);


        Quote::reguard();
    }
}
