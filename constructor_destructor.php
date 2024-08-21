<?php

//criamos uma class Correr
class Correr{
 
    //criamos uma variavel nula 
 public $corrida = null;

  //criamos uma função para construir uma instancia na class
  function __construct($corrida){
    echo 'beker';
   // this serve para recuperar um atributo do objeto
    $this->corrida = $corrida;

 }
 //criamos uma funçao para distruir 
 function __destruct() {
    echo 'Objeto removido';
}

//criamos uma função com o get para retornar um valor 
 function __get($atributo) {
    // retornamos o valor dentro do atributo puxado pelo this
    return $this->$atributo;
}

}
//criamos um variavel para guardar oque esta acontecendo dentro da class
$correr = new Correr(' está correndo');
//colocamos o get para retornar o valor da variavel corrida
echo $correr->__get('corrida');

//usamos o unset para destruir oque desejamos 
unset($corrida);

?> 