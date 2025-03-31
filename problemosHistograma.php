<?php
// Vaikine klase, kuri generuoja histograma
class ProblemosHistograma extends Problema {
    private array $histograma = [];

    public function generuotiHistograma(int $pradzia, int $pabaiga): void {
        for ($i = $pradzia; $i <= $pabaiga; $i++) {
            $iteracijos = $this->skaiciuotiIteracijas($i);
            if (!isset($this->histograma[$iteracijos])) {
                $this->histograma[$iteracijos] = 0;
            }
            $this->histograma[$iteracijos]++;
        }
    }

    public function rodytiHistograma(): void {
        foreach ($this->histograma as $iteracijos => $daznis) {
            echo "Iteracija: $iteracijos, Daznis: $daznis\n";
        }
    }
}
?>
