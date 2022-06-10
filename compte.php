<?php
declare(strict_types=1);

class Compte {
    protected float $solde;
    protected int $code;
    public static int $n = 1;
    protected string $unite = '€';

    public function  __construct($solde){
    $this->code= self::$n++;
        $this->setSolde($solde);
    }

public function déposer(float $depot) {
          $this->solde=$this->solde +$depot;

 }
 public function retirer(float $somme) {
    $this->solde=$this->solde - $somme;
}
    public function affichageSolde(){
        echo ( "Bonjour votre compte de code: " .$this->code . " votre solde est de " .  $this->solde   . $this->unite); 
}
}

$compte1=new Compte(100);
$compte2=new Compte(002);


$compte1->déposer(550);
$compte1->retirer(30);
$compte1->setSolde(10);
$compte1->affichageSolde();

$compte2->déposer(12);
$compte2->affichageSolde();