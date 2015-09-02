<?php

	/**
	* 
	*/

	//Criando a classe cliente
	class Cliente
	{
		
		//Atributos da classe
		public $id;
		public $nome;
		public $cpf;
		public $endereco;
		public $cidade;
		public $uf;


		//Construtor
		public function __construct($id, $nome, $cpf, $endereco, $cidade, $uf){

			//Definindo os atributos do objeto
			$this->id = $id;
			$this->nome = $nome;
			$this->cpf = $cpf;
			$this->endereco = $endereco;
			$this->cidade = $cidade;
			$this->uf = $uf;

		}
	}

?>