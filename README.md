Remember.Me

Alunos: David Edson Ramos Veloso - 20112370394
		Wandersson da Silva Soares - 20102370391

Estrutura:
	
	O seguinte projeto esta divido utilizando arquitetura MVC
	Model: Consiste nos dados da aplicação, lógica e funções.
	View: Saída de representação dos dados na aplicação.
	Contolador: Define o comportamento da aplicação , é ele que interpreta as ações do usuário e as mapeia para chamadas do modelo

Configuração: 
	
	Banco de Dados Mysql e PHP Versão 5
	
	Entre em View/install.php e modifique a seguinte linha:
	 - - - $pdo = new PDO('mysql:host=127.0.0.1', 'login', 'senha');
	Execute primeiramente o arquivo instal.php

	No controler taskController deve-se configurar a seginte linha:
	--PDO('mysql:dbname=tasksimple;host=127.0.0.1', 'login', 'senha');
	
	
Funcionalidades:
	O Objetivo do projeto e cadastrar e organizar tarefas, onde o usuario poderá se logar e gerenciar suas tarefas com suas informações como: titulo, descrição e data.

=======
