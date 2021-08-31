<?php   
    require 'enc.php';

    class Locacao implements apresentar {
        private $local_retirada;
        private $data_retirada;
        private $hora_retirada;
        private $local_devolucao;
        private $data_devolucao;
        private $hora_devolucao;
        private $carro_alugado; // UM OBJETO CARRO INSTANCIADO
        private $locatario;  // OBJETO PESSOA


        //\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\//\/\/\/\


        public function __construct($lr,$dr,$hr,$ld,$dd,$hd,$ca,$lo){
            $this -> setLocal_retirada($lr);
            $this -> setData_retirada($dr);
            $this -> setHora_retirada($hr);
            $this -> setLocal_devolucao($ld);
            $this -> setData_devolucao($dd);
            $this -> setHora_devolucao($hd);
            $this -> setCarro_alugado($ca);
            $this -> setLocatario($lo);
        }

        private function getLocal_retirada(){
            return $this -> local_retirada;
        }

        private function setLocal_retirada($n){
            $this -> local_retirada = $n;
        }

        private function getData_retirada(){
            return $this -> data_retirada;
        }

        private function setData_retirada($n){
            $this -> data_retirada = $n;
        }

        private function getHora_retirada(){
            return $this -> hora_retirada;
        }

        private function setHora_retirada($n){
            $this -> hora_retirada = $n;
        }

        private function getLocal_devolucao(){
            return $this -> local_devolucao;
        }

        private function setLocal_devolucao($n){
            $this -> local_devolucao = $n;
        }

        private function getData_devolucao(){
            return $this -> data_devolucao;
        }

        private function setData_devolucao($n){
            $this -> data_devolucao = $n;
        }

        private function getHora_devolucao(){
            return $this -> hora_devolucao;
        }

        private function setHora_devolucao($n){
            $this -> hora_devolucao = $n;
        }

        private function getCarro_alugado(){
            return $this -> carro_alugado;
        }

        private function setCarro_alugado($n){
            $this -> carro_alugado = $n;
        }

        private function getLocatario(){
            return $this -> locatario;
        }

        private function setLocatario($n){
            $this -> locatario = $n;
        }


        //\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/


        private  function dias(){
            $diferenca = strtotime($this -> getData_devolucao()) - strtotime($this -> getData_retirada());
            $dias = floor($diferenca/(60 * 60 * 24 ));

            if($dias < 1 ){
                echo '<qw>Data inválida! Quantidades de dias insuficiente.</qw>';
                die();
            }
            return $dias;
        }

        private function datenow(){
            $agora = date('Y-m-d');
            return $agora;

        }

        public function preco_aluguel(){
            $total = $this -> dias() *  $this -> getCarro_alugado() -> getPreco();  
            echo 'R$'.$this -> taxa_entre_agencias($total);
            return $this -> taxa_entre_agencias($total);
        }

        private function preco_aluguel1(){
            $total = $this -> dias() *  $this -> getCarro_alugado() -> getPreco();  
            return $this -> taxa_entre_agencias($total);
        }

        private function taxa_entre_agencias($total){
            if($this -> getLocal_retirada() != $this -> getLocal_devolucao()){
                $total = $total + 100;
            }
            return $total;
        }

        private function taxa_entre_agencias2(){
            if($this -> getLocal_retirada() != $this -> getLocal_devolucao()){
                echo '<qw>Atenção taxa entre agências será cobrada!Foi informado uma agência de devolução diferente da agência de retirada.</qw><br>';
            }
        }

        public function show_aluguel(){
            $this -> dias();
            $this -> taxa_entre_agencias2();
            echo $this -> dias() .'x R$'. $this -> getCarro_alugado() -> getPreco() .' = R$'. $this -> preco_aluguel1();
        }


        public function show_Locatario(){
            echo $this -> getLocatario() -> getNome().'<br>';
            echo $this -> getLocatario() -> getCpf().'<br>';
            echo $this -> getLocatario() -> getTelefone().'<br>';
        }

        public function show_Carro(){
            echo $this -> getCarro_alugado() -> getModelo().'<br>'; 
            echo $this -> getCarro_alugado() -> getMarca().'<br>';
            echo 'R$'.$this -> getCarro_alugado() -> getPreco();
        }

        public function show_LocacaoR(){
        
            echo $this -> getData_retirada().' às '. $this -> getHora_retirada().'<br>';
            echo $this -> getLocal_retirada();
            
        }

        public function show_LocacaoD(){
            echo $this -> getData_devolucao().' às '.$this -> getHora_devolucao().'<br>';
            echo $this -> getLocal_devolucao();
            
        }

    }

