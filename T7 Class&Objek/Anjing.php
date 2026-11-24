<?php
require_once 'Hewan.php';

class Anjing extends Hewan {
    public function getJenis() {
        return "Chihuahua";
    }

    public function getSuara() {
        return "Guk! Guk!";
    }
}
?>