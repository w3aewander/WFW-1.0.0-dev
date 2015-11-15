# WFW-1.0.0-dev
Framework para fins de treinamento

Requisitos:
Deve ser criado um banco de dados com o nome 'wfw' no seu SGBD MySQL da sguinte forma:

Via terminal:
mysql -u root -p
Entre com sua senha de administrador, caso tenha. 

Se não necessitar de senha:
mysql -u root

Depois que acessar o console do MySQL entre os comandos:
create database wfw

Definir privilégios para o usuário recém criado:
grant all privileges on wfw.* to 'wfw' idendified by 'wfw123';
(claro que a senha você deverá alterar de acordo com sua preferência)

#Validar privilégios
flush privileges

Agora, simplesmente saia do console MySQL

Configurar o acesso:

Acesse o arquivo XML de configuração no caminho relativo ao seu site:
src/App/Config/config.xml

E defina as configurações de acesso de acordo.

Segue um exemplo padrão:

<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<config>
    <app_config_db 
            dsn="mysql:host=localhost;port=3306;dbname=wfw"
            user="wfw"
            pass="wfw123">
    </app_config_db>
    <app_config_version>
        wfw-1.0.0-2015-11-02-alpha-dev
    </app_config_version>
</config>


Todo o resto é feito usando convenções.
Um ORM básico foi criado para gerenciar criação e manipulação de dados no sistema.

Pronto!
Só isso é necessário para que o sistema reconheça o banco.



