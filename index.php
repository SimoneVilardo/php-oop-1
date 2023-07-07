<?php
    // Definizione della classe Movie
    class Movie {
        // Proprietà della classe
        public $voto;
        public $titolo;
        public $genere;
        public $anno;
        public $prezzo_biglietto;
        
        // Costruttore della classe
        function __construct($titolo, $genere, $anno, $voto, $prezzo_biglietto){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->anno = $anno;
            $this->voto = $voto;
            $this->prezzo_biglietto = $prezzo_biglietto;
        }

        // Metodo per impostare il prezzo del biglietto in base al voto del film
        function setVote($prezzo_biglietto){
            if($this->voto < 3){
                $this->prezzo_biglietto = $prezzo_biglietto - 3;
            }else {
                $this->prezzo_biglietto = $prezzo_biglietto;
            }
        }

        // Metodo per ottenere il prezzo del biglietto
        function getPrezzo(){
            return $this->prezzo_biglietto;
        }
    }

    // Creazione delle istanze di film
    $film1 = new Movie('Avatar', 'Fantascienza', '2009', 4, 19);
    $film1->setVote($film1->prezzo_biglietto);

    $film2 = new Movie('Io Sono Leggenda', 'Horror', '2007', 5, 22);
    $film2->setVote($film2->prezzo_biglietto);

    $film3 = new Movie('Ragazzi della notte', 'Comico', '1995', 2, 10);
    $film3->setVote($film3->prezzo_biglietto);

    $film4 = new Movie('Shaolin Soccer', 'Fantascienza', '2001', 2, 12);
    $film4->setVote($film4->prezzo_biglietto);

    // Stampare le informazioni sui film
    echo "<pre>";
    echo "<h2>Film 1:</h2>";
    echo "<h4>Titolo:</h4>".$film1->titolo;
    echo "<h4>Genere:</h4>".$film1->genere;
    echo "<h4>Anno:</h4>".$film1->anno;
    echo "<h4>Voto:</h4>".$film1->voto;
    echo "<h4>Prezzo:</h4>".$film1->prezzo_biglietto."€";
    echo "<pre>";

    echo "<h2>Film 2:</h2>";
    echo "<h4>Titolo:</h4>".$film2->titolo;
    echo "<h4>Genere:</h4>".$film2->genere;
    echo "<h4>Anno:</h4>".$film2->anno;
    echo "<h4>Voto:</h4>".$film2->voto;
    echo "<h4>Prezzo:</h4>".$film1->prezzo_biglietto."€";
    echo "<pre>";

    echo "<h2>Film 3:</h2>";
    echo "<h4>Titolo:</h4>".$film3->titolo;
    echo "<h4>Genere:</h4>".$film3->genere;
    echo "<h4>Anno:</h4>".$film3->anno;
    echo "<h4>Voto:</h4>".$film3->voto;
    echo "<h4>Prezzo:</h4>".$film3->prezzo_biglietto."€";
    echo "<pre>";

    echo "<h2>Film 4:</h2>";
    echo "<h4>Titolo:</h4>".$film4->titolo;
    echo "<h4>Genere:</h4>".$film4->genere;
    echo "<h4>Anno:</h4>".$film4->anno;
    echo "<h4>Voto:</h4>".$film4->voto;
    echo "<h4>Prezzo:</h4>".$film4->prezzo_biglietto."€";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
</html>