<?php


class Samochod {
    public $marka, $model, $iloscKol, $produkcja;

    function __construct($panstwo) {
        $this->iloscKol = 4;
        $this->produkcja = $panstwo;
    }


    public function ustawMarke($marka) {
        $this->marka = $marka;
    }

    public function pobierzMarke() { return $this->marka; }

    public function ustawModel($model) {
        $this->model = $model;
    }

    public function pobierzModel() { return $this->model; }

    public function wyswietl() {
        return "Marka: {$this->marka}<br />Model: {$this->model}<br />";
    }
}



?>
