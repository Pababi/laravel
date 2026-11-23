<?php

namespace App\Http\Controllers\equation;

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

}
