<?php
/**
 * Framework para criaçao de WEB sites usando a linguagem PHP
 * Gateway central para o framework
 *
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version 1.0
 * @copyright GPL ©2015
 * @access public
 *
 *  Este arquivo detecta. o controlador, acao e os parametros, caso sejam enviados..
 *  Se nao forem informados na url sera admitido o padrao.
 *    $controller
 *    $action
 *    $parm1
 *    $parm2
 *
 */
session_start();
date_default_timezone_set('America/Sao_Paulo');

//Modo debug - em desenvolvimento
ini_set("display_errors", E_ALL);

//Autoloader - padrao PSR-4
require '../../../vendor/autoload.php';
require '../../../bootstrap.php';

//Exibe o controller com os parametros enviado pelo argumento
printf("%s", $x->$action($parm1, $parm2));

