<?php 

    /*

        Escreva uma classe que represente um circulo no plano cartesiano. Forneça os seguintes membros de classe:

        - Um contrutor que incialize o ponto em um local por parâmetros ou na origem do espaço;
        - Métodos getter e setter.
        - Métodos de inflar e desinflar que respectivamente aumenta e diminuem o tamanho do circulo.
        - Método para mover o circulo a partir de outro ponto ou para a origem do espaço.
        - Método que retorna a àrea do círculo. 

    */

    class Planocartesiano{ // Início da classe
       
        private $x; // Linha horizontal
        private $y; // Linha vertical
        private $raio; // Raio

        //--------------------------------------------------

        // Construtor

        function __construct($raio, $x = 0, $y = 0){
            $this->x = $x;
            $this->y = $y;
            $this->setRaio($raio);
        }

        // Fim do construtor

        //--------------------------------------------------

        // Método set - Início 

        public function setX($x){ 
            $this->x = $x; 
        }
    
        public function setY($x){ 
            $this->y = $y; 
        }
    
        public function setRaio($raio){ 
            $this->raio = $raio < 0 ? 0 : $raio; 
        }

        // Método set - Fim

        //--------------------------------------------------

        // Método get - Início 

        public function getX(){ 
            return $this->x; 
        }

        public function getY(){ 
            return $this->y; 
        }

        public function getRaio(){ 
            return $this->raio; 
        }

        // Método get - Fim

        //--------------------------------------------------

        // Método Inflar e Desinflar - Início
    
        public function Inflar($value){ 
            $this->setRaio($this->raio + $value); 
        }
    
        public function Desinflar($value){ 
            $this->setRaio($this->raio - $value); 
        }

        //--------------------------------------------------

        // Método para mover - Início

        public function Movimento($ponto){
            $this->x = $ponto->getX();
            $this->y = $ponto->getY();
        }

        // Método para mover - Fim

        //--------------------------------------------------

        // Método calcular a área - Início
        
         public function Area(){ 
            return pi() * ($this->raio * 2); 
        }

        // Método calcular a área - Fim

        //--------------------------------------------------
    
    } // Fim da classe
  

?>