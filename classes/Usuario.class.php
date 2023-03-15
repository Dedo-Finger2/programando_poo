<?php
  class Usuario implements IUsuario
  {
      private $nome;
      private $cpf;
      private $telefone;
      private $senha;
      private $login;
      private $email;
      private $tarefas;
      private $projeto;
      private $curriculo;

      
      public function __construct($nome, $cpf, $telefone, $email, $login, $senha)//Cria e salva automaticamente
      {
          
      }
      
      public function setCurriculo(Curriculo $curriculo) //O valor do parâmetro $curriculo é do tipo Curriculo(Classe Curriculo)
      {
        
      }
    
      public function setTarefa($id, Tarefa $tarefa)//O valor do parâmetro $tarefa é do tipo Tarefa(Classe Tarefa)
      {
          
      }

      public function setProjeto($id, Projeto $projeto)//O valor do parâmetro $projeto é do tipo Projeto(Classe Projeto)
      {

      }

      public function getCurriculo()
      {
        
      }
    
      public function getNome($id)
      {
         
      }

      public function getCpf($id)
      {
         
      }

      public function getTelefone($id)
      {
         
      }

      public function getSenha($id)
      {
         
      }

      public function getLogin($id)
      {
         
      }

      public function getEmail($id)
      {
         
      }

      public function getTarefas($id)
      {
         
      }

      public function deletarUsuario($id)
      {

      }

      public function editarUsuario($id, $novo_nome, $novo_cpf, 
          $novo_email, $novo_login, $novo_senha, $novo_telefone
          )
      {

      }


      public function alertarUsuario($id)
      {

      }



  }
