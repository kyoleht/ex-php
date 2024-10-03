<?php 

class Bola {
    public static $conta_bolas = 0; // variavel estatica para contar as bolas
    public $diametro; // variavel para armazenar o diametro da bola

    public function __construct($diametro) { // metodo construtor
        $this->diametro = $diametro; // define o diametro da bola
        self::$conta_bolas++; // incrementa a contagem de bolas
    }
}

// criando duas bolas

$bola1 = new Bola(10); // bola com diametro 10
$bola2 = new Bola(20); // bola com diametro 20

// exibindo quantas bolas foram criadas 
echo "Total de bolas criadas: " . Bola::$conta_bolas; // exibição: 2

?>