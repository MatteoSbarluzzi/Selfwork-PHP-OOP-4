<?php

class Car {
    private $num_telaio;

    public function __construct($num_telaio) {
        $this->num_telaio = $num_telaio;
    }

    protected function getNumTelaio() {
        return $this->num_telaio;
    }
}

class Fiat extends Car {
    protected $license;
    protected $name;

    public function __construct($name, $license, $num_telaio) {
        parent::__construct($num_telaio);
        $this->name = $name;
        $this->license = $license;
    }

    public function printDetails() {
        echo "La mia macchina e' {$this->name}, con targa {$this->license} e numero di Telaio " . $this->getNumTelaio() . ".\n";
    }
}

// Esempio di utilizzo
$auto = new Fiat("Opel", "ND 123 OJ", 1234);
$auto->printDetails();

?>
