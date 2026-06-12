<?php

namespace App\Http\Controllers\PythagoreanTheorem;

class PythagoreanTheoremController
{
    private function pythagoreanTheorem(int $catheterA, int $catheterB): PythagoreanTheoremResult
    {
        $hypotenuse = sqrt($catheterA * $catheterA + $catheterB * $catheterB);
        return new PythagoreanTheoremResult($catheterA, $catheterB, $hypotenuse);
    }

    public function pythagoreanForm(): void
    {
        $html = '<form action="/pythagorean" method="POST">
     <input type="text" name="catheterA" placeholder="Катет А">
     <input type="text" name="catheterB" placeholder="Катет B">
     <input type="submit">
     </form>';

        echo $html;
        $errors = session('errors', collect());
        if ($errors && $errors->any()) {
            foreach ($errors->all() as $message) {
                echo '<span style="color: red;">' . $message . '</span>' . '<br>';
            }
        }
    }
    public function pythagoreanFormPost(PythagoreanTheoremRequest $request): void
    {
        $catheterA = $request['catheterA'];
        $catheterB = $request['catheterB'];
        $hypotenuse = $this->pythagoreanTheorem($catheterA, $catheterB);
        echo 'Катет А= '. $hypotenuse->catheterA .'<br>';
        echo 'Катет B= '. $hypotenuse->catheterB .'<br>';
        echo 'Гипотенуза= '. $hypotenuse->hypotenuse;
    }
}
