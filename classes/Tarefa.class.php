<?php
  class Tarefa extends Projeto
  {
    private $data_criacao; 
    private $prioridade;
    private $status;
    private $projeto;
    private $sub_tarefas;

    //Método criador do programa
    public function __construct(
        $nome, $descricao, $prazo, $data_criacao, 
        $prioridade, $status, Usuario $usuario, Projeto $projeto 
        )//O valor do parâmetro $usuario é do tipo Usuario(Classe Usuario), O valor do parâmetro $projeto é do tipo Projeto(Classe Projeto)  
    {

    }
    //Método de gerenciamento de Tarefas
    public function editarTarefa(
        $id, $novo_nome, $novo_descricao, $novo_prazo, $novo_data_criacao, 
        $novo_prioridade, $novo_status, Usuario $novo_usuario
        )
    {

    }

    public function deletarTarefa()
    {
        
    }

    public function listarTarefas($filtro, $valor)
    {

    }

    public function setSubtarefa(Subtarefa $sub_tarefa)
    {
      
    }

    public function deletarSubtarefa(Subtarefa $sub_tarefa)
    {
      
    }
    
}