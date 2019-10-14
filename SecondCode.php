<?php

#Interface "Item" possui 2 métodos, um que defini cor e outro que defini o tamanho do item, a interface sera extendida por outras 2 interfaces 


interface Item{

    public function defineCor($cor);
    public function defineTamanho($tamanho);

}

#Interface que extende a interface "Item" para ter apenas as funções de aplicar codigo e aplicar desconto

interface ItemCodigoDesconto extends Item{

    public function aplicaCodigoPromocao($codigoPromocao); 
    public function aplicaDesconto($desconto); 

}

 /* Interface que extende a interface "Item" para ter apenas as funções de definir parcela e preço,
  mas para isso ser possivel, é preciso ter acesso ao codigo e ao desconto do item */

interface ItemPrecoParcela extends ItemCodigoDesconto{

    public function aplicaCodigoPromocao($codigoPromocao); 
    public function aplicaDesconto($desconto); 
    public function defineParcelas($parcelas);
    public function definePreco($preco);  

}

#Classe que  implementa a interace "ItemCodigoDesconto" para aplicar o codigo de promoção e o desconto 

class ItemAplicaDesconto implements ItemCodigoDesconto{

    public function aplicaCodigoPromocao($codigoPromocao); 
    public function aplicaDesconto($desconto); 

}

 /*Classe que implementa a interface "ItemPrecoParcela" para aplicar um preço e definir as parcelas,
 mas para isso ser possivel, é preciso ter acesso ao codigo e ao desconto feito para o item*/


class ItemAplicaPreco implements ItemPrecoParcela{
    
    public function aplicaCodigoPromocao($codigoPromocao); 
    public function aplicaDesconto($desconto); 
    public function defineParcelas($parcelas);
    public function definePreco($preco); 

}


?>