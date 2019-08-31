WFW-1.0.0-dev
-------------

Framework em desenvolvimento na linguagem PHP 
=============================================

Versão do Framework
===================

versão: 1.0.0-dev-alpha
=======================


##Requisitos:
Linguagem PHP5.5.9 ou superior

Deve ser criado um banco de dados com o nome 'wfw' no seu SGBD MySQL de acordo com seu sistema operacional da seguinte forma:

###Configuração via terminal/Console:
mysql -u root -p

####Entre com sua senha de administrador, caso tenha. 
Se não necessitar de senha:
mysql -u root

###Depois que acessar o console do MySQL entre os comandos:
create database wfw

####Definir privilégios para o usuário recém criado:
grant all privileges on wfw.* to 'wfw' idendified by 'wfw123';
(claro que a senha você deverá alterar de acordo com sua preferência)

####Validar privilégios
flush privileges

Agora, simplesmente saia do console MySQL

###Configurar o acesso:

Acesse o arquivo XML de configuração no caminho relativo ao seu site:
src/App/Config/config.xml

E defina as configurações de acesso de acordo.

####Segue um exemplo padrão:

######<?xml version="1.0" encoding="UTF-8"?>
#######<!--
#######To change this license header, choose License Headers in Project Properties.
#######To change this template file, choose Tools | Templates
#######and open the template in the editor.
#######-->
#######<config>
#######    <app_config_db 
#######            dsn="mysql:host=localhost;port=3306;dbname=wfw"
#######            user="wfw"
#######            pass="wfw123">
#######    </app_config_db>
#######    <app_config_version>
#######        wfw-1.0.0-2015-11-02-alpha-dev
#######    </app_config_version>
#######</config>
######
######

Todo o resto é feito usando convenções.
Um ORM básico foi criado para gerenciar criação e manipulação de dados no sistema.

Só isso é necessário para que o sistema reconheça o banco.

###Executando o sistema
O sistema deve ser executado a partir do diretório src/App/public.
Para isso, vá até o seu terminal/Console ou Prompt de comando, caso esteja no Windows e digite o comando:
php -S 0.0.0.0:8080 -t ./

####Acesse pelo navegador Chrome preferencialmente, pois está sendo testado neste browser primeiro:
http://localhost:8080


######Pronto!
