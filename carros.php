<?php

    class Carro{
        private $modelo;
        private $marca;
        private $cor;
        private $potencia;
        private $ar_condicionado;
        private $preco;


        //////////////////////////////////


        public function __construct($mo,$ma,$co,$po,$ar,$p){
            $this -> setModelo($mo);
            $this -> setMarca($ma);
            $this -> setCor($co);
            $this -> setPotencia($po);
            $this -> setAr_condicionado($ar);
            $this -> setPreco($p);

        }

        public function getModelo(){
            return $this -> modelo;
        }

        public function setModelo($m){
            $this -> modelo = $m;
        }

        public function getMarca(){
            return $this -> marca;
        }

        public function setMarca($m){
            $this -> marca = $m;
        }

        public function getCor(){
            return $this -> cor;
        }

        public function setCor($m){
            $this -> cor = $m;
        }

        public function getPotencia(){
            return $this -> potencia;
        }

        public function setPotencia($m){
            $this -> potencia = $m;
        }

        public function getAr_condicionado(){
            return $this -> ar_condicionado;
        }

        public function setAr_condicionado($m){
            $this -> ar_condicionado = $m;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($preco){
            $this->preco = $preco;

            return $this;
        }
    }