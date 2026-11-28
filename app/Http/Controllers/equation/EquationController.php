<?php

namespace App\Http\Controllers\equation;

use App\UseCase\Discriminant\Handler;

class EquationController
{
    public function equationForm() : void
    {
        $html = '
        <form method="POST" action="/equation">
        <input type="text" name="a" placeholder="Значение A">
        <input type="text" name="b" placeholder="Значение B">
        <input type="text" name="c" placeholder="Значение C">
        <input type="submit" value="Посчитать"></form>';
        echo $html;
        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color:red">' . $message . '</span>';
            }
        }

    }


    public function equationFormPost(EquationRequest $request) : void
    {
        $a = $request['a'];
        $b = $request['b'];
        $c = $request['c'];

        $useCase = new Handler();
        $discriminant = $useCase($a, $b, $c);
        echo 'Дискриминант = ' . $discriminant->discriminant . '<br>';
        echo $discriminant->x .'<br>';
        echo "Данное решение получено с данных a = $discriminant->a,
        b = $discriminant->b,
        c = $discriminant->c";





//

    }

}
