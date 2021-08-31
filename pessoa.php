<?php

    class Pessoa{
        private $nome;
        private $cpf;
        private $email;
        private $telefone;


        /////////////////////////


        public function __construct($no,$c,$em,$te){
            $this -> setNome($no);
            $this -> setCpf($c);
            $this -> setEmail($em);
            $this -> setTelefone($te);

        }


        public function getNome(){
            return $this -> nome;
        }

        public function setNome($n){
            $this -> nome = $n;
        }

        public function getCpf(){
            return $this -> cpf;
        }

        public function setCpf($n){
            $this -> cpf = $n;
        }

        public function getEmail(){
            return $this -> email;
        }

        public function setEmail($n){
            $this -> email = $n;
        }

        public function getTelefone(){
            return $this -> telefone;
        }

        public function setTelefone($n){
            $this -> telefone = $n;
        }


    }

