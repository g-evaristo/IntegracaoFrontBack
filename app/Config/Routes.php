<?php

// Rotas Alunos

$routes->get('/alunos', 'AlunosController::index');
$routes->get('/alunos/novo', 'AlunosController::novo');
$routes->post('/alunos/inserir', 'AlunosController::inserir');
$routes->get('/alunos/editar/(:num)', 'AlunosController::editar/$1');
$routes->post('alunos/atualizar/(:num)', 'AlunosController::atualizar/$1');
$routes->get('/alunos/excluir/(:num)','AlunosController::excluir/$1');

// Rotas Cursos

$routes->get('/cursos', 'CursosController::index');
$routes->get('/cursos/novo', 'CursosController::novo');
$routes->post('/cursos/inserir', 'CursosController::inserir');
$routes->get('/cursos/editar/(:num)', 'CursosController::editar/$1');
$routes->post('/cursos/atualizar/(:num)', 'CursosController::atualizar/$1');
$routes->get('/cursos/excluir/(:num)', 'CursosController::excluir/$1');

// Rotas Dashboard

$routes->get('/', 'DashboardController::index');
$routes->get('/dashboard', 'DashboardController::index');

// Rotas Cursos

$routes->get('/salas', 'SalasController::index');
$routes->get('/salas/novo', 'SalasController::novo');
$routes->post('/salas/inserir', 'SalasController::inserir');
$routes->get('/salas/editar/(:num)', 'SalasController::editar/$1');
$routes->post('/salas/atualizar/(:num)', 'SalasController::atualizar/$1');
$routes->get('/salas/excluir/(:num)', 'SalasController::excluir/$1');

