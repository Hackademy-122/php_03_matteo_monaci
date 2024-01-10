<?php

// classi

class Vehicle {

    public $targa;
    public $anno;
    public static $counterV = 0;

    public function __construct($_targa, $_anno) {
        $this -> targa = $_targa;
        $this -> anno = $_anno;
        self::$counterV++;
    }
};

class Car extends Vehicle {

    public $numPorte;
    public static $counterC = 0;

    public function __construct($_targa, $_anno, $_numPorte) {
        parent::__construct($_targa, $_anno);
        $this -> numPorte = $_numPorte;
        self::$counterC = 0;

    }
}

class Moto extends Vehicle {

    public $tempi;
    public static $counterM = 0;

    public function __construct($_targa, $_anno, $_tempi) {
        parent::__construct($_targa, $_anno);
        $this -> tempi = $_tempi;
        self::$counterM = 0;
    }
}


// richiesta continuazione

do {
    
} while ($a <= 10);

// richiesta inserimento vettura
$prompt = strtoupper(readline("vuoi inserire un nuovo veicolo?\n"));

if ($prompt == 'SI' || $prompt == 'NO') {

    if ($prompt == 'SI') {
        
        // check vehicle
        $vehicle = strtoupper(readline("inserisci la tipologia di veicolo.\n(Opzioni disponibili: auto - moto)\n"));
        
        switch ($vehicle) {
            case 'MOTO':
                // check targa
                do {
        
                    $targa = strtoupper(readline("inserisci la targa\n"));
        
                    if (!(strlen($targa) == 6)) {
                        echo "la targa deve contenere 6 caratteri\n";
                    };
        
                } while (!(strlen($targa) == 6));
        
                // check anno
                do {
        
                    $anno = readline("inserisci l'anno di matricola\n");
        
                    if ($anno > 2023) {
                        echo "l'anno inserito non è corretto\n";
                    }
        
                } while (!($anno < 2023));

                // check tempi
                do {
                    
                    $tempi = readline("motore a quanti tempi ?\n");

                    if ($tempi != 2 || $tempi != 4) {
                        echo "tempi inseriti non corretti, scegliere tra 2 o 4\n";
                    }

                } while (!($tempi != 2 || $tempi != 4));

                // aggiunta moto
                $veicolo = new Car($targa, $anno, $tempi);
                $veicolo = new Car($targa, $anno, $tempi);
        
            break;
            
            case 'AUTO':
                // check targa
                do {
        
                    $targa = strtoupper(readline("inserisci la targa\n"));
        
                    if (!(strlen($targa) == 6)) {
                        echo "la targa deve contenere 6 caratteri\n";
                    };
        
                } while (!(strlen($targa) == 6));
        
                // check anno
                do {
        
                    $anno = readline("inserisci l'anno di matricola\n");
        
                    if ($anno > 2023) {
                        echo "l'anno inserito non è corretto\n";
                    }
        
                } while (!($anno < 2023));
        
                // check porte
        
                do {

                    $numPorte = readline("inserisci il numero delle porterie\n");

                    if (!($numPorte > 3 && $numPorte < 7)) {
                        echo "inserire un numero di porte valido\n";
                    }

                } while (!($numPorte > 3 && $numPorte < 7));

                // aggiungi veicolo
                $veicolo = new Car($targa, $anno, $numPorte);

            break;
        }

    } else {
        echo "Va bene, ti auguro buona giornata";
    }
} else {
    $prompt = strtoupper(readline("Non ho capito la tua risposta. Vuoi inserire un nuovo veicolo ? (rispondi si o no)\n"));
}

var_dump($veicolo);

