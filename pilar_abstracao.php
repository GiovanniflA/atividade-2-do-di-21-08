<?php

//criamos uma função funcionario
class Funcionario {

    // criamos variaveis nulas 
    public $nome= null;
    public $telefone= null;
    public $numFilhos=null;

        //criamos um funçao set, que ele seta oque esta dentro da variavel mas não aparece  
    function setNome($nome) {
        $this->nome = $nome;
    }
    //criamos uma função getNome para retornar o valor do nome
    function getNome() {
        // retorna o valor que o this esta puxando do nome
        return $this->nome;
    }
    //criamos uma função get para retornar o valor NumFilhos
    function getNumFilhos() {
         // retorna o valor que o this esta puxando do nonumFilhos
        return $this->numFilhos;
    }

    function setNumFilhos($numFilhos) {
        $this->numFilhos = $numFilhos;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function getTelefone ($telefone) {
        return $this->telefone = $telefone;
    }

    //retorna oque this esta puxando das variaveis 
    function resumirCardFunc () {
        return "$this->nome  e ele possui $this->numFilhos filho(s)";
    }

    function modificarNumFilhos($numFilhos) {
       return $this->numFilhos = $numFilhos;
    }

}
//criamos uma variavel que guarda oque esta dentro da class
$y= new Funcionario();
//aqui estamos setando oque esta dentro do nome
$y->setNome('Monique');
//aqui estamos setando oque esta dentro do NumFilhos
$y->setNumFilhos(0)  ;
//estamos dando echo para expôr na tela oque esta dentro das funções 
echo $y->resumirCardFunc() . '<br/>';
echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filhos ';

?>