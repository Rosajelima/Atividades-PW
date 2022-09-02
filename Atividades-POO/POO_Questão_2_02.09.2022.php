<?php 

    /*

        A fim de representar empregados em uma firma, crie uma classe chamada Empregado que inclui as três informações a seguir como atributos:

        um primeiro nome
        um sobrenome
        um salário mensal.

        Sua classe deve ter um construtor que inicializa os três atributos. Forneça um método set e get para cada atributo. Se o salário mensal não for positivo, configure-o como 0.0. Crie um método que exibe o salário anual e um que dê 10% de aumento no salário.

    */

    class Empregado{ // Início da classe

        private $primeiron; // Primeiro nome
        private $sobrenome; // Sobrenome
        private $salariom; // Salário Mensal

        //--------------------------------------------------

        // Construtor

        function __construct($prin, $sobren, $sm){
            $this->primeiron = $prin;
            $this->sobrenome = $sobren;

            if($sm <= 0) {
                $this->salariom = 0.0;
            } else {
                $this->salariom = $sm;
            }
        }

        // Fim do construtor

        //--------------------------------------------------

        // Método set - Início 

        public function __set($atributo, $value){
            $this->$atributo = $value;
        }

        // Método set - Fim

        //--------------------------------------------------

        // Método get - Início 

        public function __get($atributo){
            return $this->$atributo;
        }

        // Método get - Fim

        //--------------------------------------------------

        // Método Salário Anual e Aumento de 10%

        public function getSalarioAnual(){
            $anual = $this->salariom * 12;
            return $anual;
        }

        public function Aumento(){
            return $this->salariom + ( $this-> salariom * 0.10 ) ;
         }

    } // Fim da classe

    $empresa = new Empregado("Andressa", "Carvalho", 12000);

    echo "<strong> O seu primeiro nome é: </strong>" . $empresa -> primeiron . "<br>";
    echo "<strong> O seu sobrenome é: </strong>" . $empresa -> sobrenome . "<br>";
    echo "<strong> O seu salário mensal é: </strong>" . $empresa -> salariom . "<br>";
    echo "<strong> O seu salário anual é: </strong>" . $empresa -> getSalarioAnual() . "<br>";
    echo "<strong> O seu aumento de 10% será: </strong>" . $empresa -> Aumento();
?>