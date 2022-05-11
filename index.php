<?php

class Movie {
    // attribuisco alla classe delle variabili d'istanza:
    public $titolo;
    public $regista;
    public $genere;
    public $anno;
    public $attorePrincipale;
    public $casaProduzione;
    public $collezione;

    // definisco un costruttore:
    public function __construct($_titolo, $_regista, $_genere, $_anno, $_attorePrincipale, $_casaProduzione){
        $this -> titolo = $_titolo;
        $this -> regista = $_regista;
        $this -> genere = $_genere;
        $this -> anno = $_anno;
        $this -> attorePrincipale = $_attorePrincipale;
        $this -> casaProduzione = $_casaProduzione;
    }

    // setter funzione 'I maestri del cinema italiano'
    public function setCollezione( $regista ){
        if($regista == "Elio Petri" || $regista == "Ettore Scola" || $regista == "Federico Fellini"){
            $this->collezione = "Nella collezione 'I maestri del cinema italiano'";
        }
    }

    // getter funzione di stampa 'I maestri del cinema italiano'
    public function getCollezione(){
        return $this -> collezione;
    }

}

// istanzio il primo oggetto 'Movie'
$indagine = new Movie("Indagine su un cittadino al di sopra di ogni sospetto", "Elio Petri", "Thriller", 1970, "Gian Maria Volonté", "Vera Film");

// stampo i suoi valori
echo "<p>". $indagine -> titolo ."</p>";
echo "<p>". $indagine -> regista ."</p>";
echo "<p>". $indagine -> genere ."</p>";
echo "<p>". $indagine -> anno ."</p>";
echo "<p>". $indagine -> attorePrincipale ."</p>";
echo "<p>". $indagine -> casaProduzione ."</p>";

// uso la funzione di una classe
echo $indagine -> setCollezione( $indagine -> regista );

// stampo richiamando la funzione
echo "<p>" . $indagine -> getCollezione() . "</p>";

// istanzio il secondo oggetto 'Movie'
$aprile = new Movie("Aprile", "Nanni Moretti", "Commedia/Drammatico", 1998, "Nanni Moretti", "Sacher Film");

// stampo i suoi valori
echo "<p>". $aprile -> titolo ."</p>";
echo "<p>". $aprile -> regista ."</p>";
echo "<p>". $aprile -> genere ."</p>";
echo "<p>". $aprile -> anno ."</p>";
echo "<p>". $aprile -> attorePrincipale ."</p>";
echo "<p>". $aprile -> casaProduzione ."</p>";

// uso la funzione di una classe
echo $aprile -> setCollezione( $aprile -> regista );

// stampo richiamando la funzione (non avendo inserito Moretti tra i maestri del cinema italiano, questo film non rientrerà comunque in quella collezione)
echo "<p>" . $aprile -> getCollezione() . "</p>";

// istanzio il terzo oggetto 'Movie'
$unaGiornataParticolare = new Movie("Una giornata particolare", "Ettore Scola", "Drammatico", 1977, "Sophia Loren", "Compagnia Cinematografica Champion");

// stampo i suoi valori
echo "<p>". $unaGiornataParticolare -> titolo ."</p>";
echo "<p>". $unaGiornataParticolare -> regista ."</p>";
echo "<p>". $unaGiornataParticolare -> genere ."</p>";
echo "<p>". $unaGiornataParticolare -> anno ."</p>";
echo "<p>". $unaGiornataParticolare -> attorePrincipale ."</p>";
echo "<p>". $unaGiornataParticolare -> casaProduzione ."</p>";

// uso la funzione di una classe
echo $unaGiornataParticolare -> setCollezione( $unaGiornataParticolare -> regista );

// stampo richiamando la funzione (Scola è inserito tra i maestri del cinema italiano, pertanto questo film entrerà in quella collezione)
echo "<p>" . $unaGiornataParticolare -> getCollezione() . "</p>";

?>