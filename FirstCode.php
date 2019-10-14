<?php

#Classe para métodos com as funções de manipular, retornar, e excluir itens 

class Pedido{

    public function calcularSomaTotal(){/*...*/}
    public function retornaItens(){/*...*/}
    public function retornaQuantidade(){/*...*/}
    public function adicionaItem($item){/*...*/}
    public function excluirItem($item){/*...*/}
}

#Classe para mostrar os pedidos

class ReturnPedido{

    public function imprimePedido(){/*...*/}
    public function mostraHTMLPedido(){/*...*/}
}

#Classe para métodos de manipulação

class HandlePedido{
    
    public function carrega(){/*...*/}
    public function salva(){/*...*/}
    public function atualiza(){/*...*/}
    public function exclui(){/*...*/} 
} 

?>