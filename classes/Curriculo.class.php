<?php
  class Curriculo
		//Representa o curricúlo de usuário
  {
    private $usuario; //Composição da classe Usuário
    private $descricao; // O usuário deve se apresentar brevemente
		private $experiencia_profissional;
    private $formacao_academica;
    private $habilidades_tecnicas;
    
    public function __construct(
      Usuario $usuario, $descricao, $experiencia_profissional, 
      $formacao_academica, $habilidades_tecnicas
      )
    {
      
    }

    public function editarCurriculo(Usuario $usuario, $nova_descricao, $nova_experiencia_profissional, 
      $nova_formacao_academica, $nova_habilidades_tecnicas) //Aqui selecionamos todos os dados da Classe Curricúlo
		// Esse método vai editar o curriculo do usuário marcado como primeiro parâmetro, atribuindo os novos valores aos valores dos atributos do curriculo
    {
      
    }
    
  }


    