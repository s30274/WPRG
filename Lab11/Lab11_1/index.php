<?php
class NoweAuto {
    protected $model = "", $cena = 0.0, $kurs = 0.0;
    public function __construct($model, $cena, $kurs) {
        $this->model=$model;
        $this->cena=$cena;
        $this->kurs=$kurs;
    }
    public function ObliczCene() {
        return $this->cena*$this->kurs;
    }
}

class AutoZDodatkami extends NoweAuto {
    protected $alarm, $radio, $klimatyzacja;
    public function __construct($model, $cena, $kurs, $alarm, $radio, $klimatyzacja) {
        $this->model=$model;
        $this->cena=$cena;
        $this->kurs=$kurs;
        $this->alarm=$alarm;
        $this->radio=$radio;
        $this->klimatyzacja=$klimatyzacja;
    }
    public function ObliczCene() {
        $suma = $this->cena+$this->alarm+$this->radio+$this->klimatyzacja;
        return $suma*$this->kurs;
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    private $procent, $wiek;
    public function __construct($model, $cena, $kurs, $alarm, $radio, $klimatyzacja, $procent, $wiek) {
        $this->model=$model;
        $this->cena=$cena;
        $this->kurs=$kurs;
        $this->alarm=$alarm;
        $this->radio=$radio;
        $this->klimatyzacja=$klimatyzacja;
        $this->procent=$procent/100;
        $this->wiek=$wiek;
    }
    public function ObliczCene() {
        $suma = $this->cena+$this->alarm+$this->radio+$this->klimatyzacja;
        $znizka = ((100-$this->wiek)/100);
        echo $suma."\n";
        return $this->procent*$suma*$znizka*$this->kurs;
    }
}

$auto = new NoweAuto("Skoda", 10000, 4.28);
$zdodatkami = new AutoZDodatkami("Skoda", 10000, 4.28, 500, 100, 300);
$ubezpieczenie = new Ubezpieczenie("Skoda", 10000, 4.28, 500, 100, 300, 20, 1);
echo $auto->ObliczCene()."\n";
echo $zdodatkami->ObliczCene()."\n";
echo $ubezpieczenie->ObliczCene()."\n";