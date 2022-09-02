<?php

    /*

        Crie uma classe chamada Invoice que possa ser utilizado por uma loja de suprimentos de informática para representar uma fatura de um item vendido na loja. Uma fatura deve incluir as seguintes informações como atributos

        - número do item faturado,
        - descrição do item
        - quantidade comprada do item
        - preço unitário do item

        Sua classe deve ter um construtor que inicialize os quatro atributos. Se a quantidade não for positiva, ela deve ser configurada como 0. Se o preço por item não for positivo ele deve ser configurado como 0.0. Forneça um método set e um método get para cada variável de instância. Além disso, forneça um método chamado getInvoiceAmount que calcula o valor da fatura (isso é, multiplica a quantidade pelo preço por item) e depois retorna o valor.

        //--------------------------------------------------

        // Método Set - Início

        // public function __setNumero($numeroF){
        //     $this->numeroF = $numero;
        // }

        // public function __setQuantidade($quantidadeI){
        //     $this->quantidadeI = $quantidade;
        // }

        // public function __setDescricao($descricaoI){
        //     $this->descricaoI = $descricao;
        // }

        // public function __setPreco($precoU){
        //     $this->precoU = $preco;
        // }

        // Método Set - Fim

        //--------------------------------------------------
       
        // Método Get

        // public function __getNumero($numero){
        //     return $this->$numero;
        // }
        
        // public function __getQuantidade($quantidade){
        //     return $this->$quantidade;
        // }
        
        // public function __getDescricao($descricao){
        //     return $this->$descricao;
        // }   
        
        // public function __getPreco($preco){
        //     return $this->$preco;
        // }

        // Método Get - Fim

        //--------------------------------------------------
    
    */

    class Invoice{ // Início da classe

        private $nif; // Número do item faturado
        private $ddi; // Descrição do item
        private $qci; // Quantidade comprada do item
        private $pui; // Preço unitário do item

        //--------------------------------------------------

        // Construtor

        public function __construct($numeroF, $descricaoI, $quantidadeI, $precoU){
            $this->nif = $numeroF;
            $this->ddi = $descricaoI;
            // $this->qci = $quantidadeI;
            // $this->pui = $precoU;

            if($quantidadeI <= 0){ 
                $this->qci = 0; 
            } else {
                $this->qci = $quantidadeI;
            }
            
            if($precoU <= 0){
                $this->pui = 0.0;
            } else {
                $this->pui = $precoU;
            }
        }

        // Fim do construtor

        //--------------------------------------------------

        // Método Set - Início

        public function __set($atributo, $value){
            $this->$atributo = $value;
        }

        // Método Set - Fim

        //--------------------------------------------------
       
        // Método Get

        public function __get($atributo){
            return $this->$atributo;
        }

        // Método Get - Fim

        //--------------------------------------------------

        // Método getInvoiceAmount - Início

        public function getInvoiceAmount(){
            $amount = $this->pui * $this->qci;
            return $amount;
        }

        // Método getInvoiceAmount - Fim

    } // Fim da classe

    $informatica = new Invoice(19, "Monitor", 20, 499.99);

    echo "<strong> O número do item é: </strong>" . $informatica -> nif . "<br>";
    echo "<strong> A descrição do item é: </strong>" . $informatica -> ddi . "<br>"; 
    echo "<strong> A quantidade do item é: </strong>" . $informatica -> qci . "<br>";
    echo "<strong> O preço unitário do item é: </strong>" . $informatica -> pui . "<br>";
    echo "<strong> Total: </strong>" . $informatica -> getInvoiceAmount();

?>