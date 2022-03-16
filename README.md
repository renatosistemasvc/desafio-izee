## SOBRE MIM

Olá! Me chamo Renato Souza de Oliveira, moro em Vitória da Conquista-BA, sou formado em Sistemas de Informação e sou desenvolvedor web full stack há vários anos. Minha Stack de trabalho hoje é Laravel (PHP), NodeJs (Javascript) para backend e VueJs, ReactJs no Frontend. Também já desenvolvi vários projetos mobile com react native. Além da minha stack atual, trabalhei vários anos com jquery e tecnologias de frontend não reativas.

Sobre minha experiência profissional, trabalhei por muito anos em SoftHouse's. Dentre elas a Agência Dona Graça (agência de desenvolvimento de software) e algumas outras. Na vida profissional, na maioria das agências, eu trabalhei com algumas plataformas de ecommerce. Na última agência eu participei ativamente do desenvolvimento de uma plataforma própria de loja virtual nos moldes da Loja Integrada. Também trabalhei no desenvolvimento de Software para Gestão de Empresas (ERP) dentre diversos outros ramos.

## DESAFIO IZEE

Para o desafio, conforme solicitado em PDF, foi desenvolvido uma api REST em laravel (backend) com o objetivo de resolver o seguinte problema:

"Foi solicitado a você que seja criada uma solução onde usuários (users) possam se cadastrar e criar o registro das suas Imobiliárias (companies. Dentro do escopo de cada imobiliária, deve-se poder cadastrar Proprietários (property owners) e Imóveis (properties)"

Procurei simplificar bastante a solução empregada neste projeto. Foram utilizados classes Actions buscando obter o conceito de responsabiliade única das classes. Procurei não utilizar outros conceitos do SOLID com o objetivo de simplificar ao máximo a solução.

## STACK E RECURSOS

A seguir a stack e recursos utilizados para a resolução do problema:

-   Laravel - Versão 8.\*.
-   Bando de Dados MySql - Versão 8.
-   Sistema de autenticação Passport (do próprio laravel).
-   Classe request do próprio Laravel para Validação dos dados de entrada.

## PASSO A PASSO PARA RODAR O PROJETO

-   1 - Após clonado, deverá ser rodado o comando: composer install para instalação das dependências do projeto;
-   2 - Deverá ser inserido as credenciais de acesso ao banco de dados no arquivo .env (utilizar o arquivo .end.example como base);
-   3 - Rodar o comando: php artisan migrate para criação das tabelas do banco de dados;
-   4 - Rodar o comando: php artisan passport:install para criação das chaves de criptografia necessárias para geração do token de autenticação;
-   5 - Dar acesso a permissão de escrita a pasta /storage do projeto;

## CONSIDERAÇÕES

Agradeço pela opotunidade de mostrar um pouco da minha capacidade técnica. A priore procurei simplificar bastante a solução empregada neste desafio. Entretando, possuo bastante experiências nos mais diversos patterns que são utilizados no mercado. Tais como SOLID e outros. Qualquer dúvida ou observações, meu zap é: (77) 988045503 - E-mail: renatosistemas.vc@gmail.com
