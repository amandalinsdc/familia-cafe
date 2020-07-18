<?php

require_once('../config.php');
require_once(DBAPI);

$customers = null;
$customer = null;

function listContatos() {
	global $customers;
	$customers = find_all('contato');
}

function add() {
  if (!empty($_POST['customer'])) {
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $customer = $_POST['customer'];
    
    $customer['data_cadastro'] = $today->format("Y-m-d H:i:s");
    
    $elementos = array_values($customer);
    save('contato', $customer);
    
    header('location: ../cafe-familia/contato.php');
  }
}

function view($id = null) {
  global $customer;
  $customer = find('contato', $id);
}
function delete($id = null) {

  global $customer;
  $customer = remove('contato', $id);

  header('location: ../cafe-familia/list-contatos.php');
}

function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['customer'])) {

      $customer = $_POST['customer'];
      print_r(update('customers', $id, $customer));
      header('location: /cafe-familia/list-contato.php');
    } else {
        global $customer;
        $customer = find('contato', $id);
    } 
  } else {
    header('location: ../cafe-familia/list-contato.php');
  }
}