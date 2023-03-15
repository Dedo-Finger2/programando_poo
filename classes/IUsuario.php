<?php
    interface IUsuario
    {
        public function getCurriculo();

        public function getNome($id);
        
        public function getCpf($id);

        public function getTelefone($id);

        public function getSenha($id);

        public function getLogin($id);

        public function getEmail($id);
        
        public function getTarefas($id);
        
    }