<?php
// Tevine klase, atliekanti 3x+1 skaiciavimus
class Problema {
    public function skaiciuotiIteracijas(int $skaicius): int {
        $iteracijos = 0;
        while ($skaicius != 1) {
            $skaicius = ($skaicius % 2 == 0) ? $skaicius / 2 : 3 * $skaicius + 1;
            $iteracijos++;
        }
        return $iteracijos;
    }
}
?>
