<?php

$job = '';
$id  = '';
if (isset($_GET['job'])) {
  $job = $_GET['job'];
  if (
    $job == 'get_companies' ||
    $job == 'get_company'   ||
    $job == 'add_company'   ||
    $job == 'edit_company'  ||
    $job == 'delete_company'
  ) {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      if (!is_numeric($id)) {
        $id = '';
      }
    }
  } else {
    $job = '';
  }
}

// Prepare array
$mysql_data = array();

// Valid job found
if ($job != '') {

  // Connect to database
  include_once '../includes/class/bdd.php';
}

// Execute job
if ($job == 'get_companies') {

  // Get companies
  $query = $bdd->prepare("SELECT * FROM utilisateurs ORDER BY id");
  $query->execute();
  if (!$query) {
    $result  = 'error';
    $message = 'query error';
  } else {
    $result  = 'success';
    $message = 'query success';
    while ($user = $query->fetch()) {
      $functions  = '<div class="function_buttons"><ul>';
      $functions .= '<li class="function_delete"><a data-id="' . $user['id'] . '" data-name="' . $user['nom'] . '"><span>Delete</span></a></li>';
      $functions .= '</ul></div>';
      $mysql_data[] = array(
        "id"               => $user['id'],
        "nom"              => $user['nom'],
        "prenom"           => $user['prenom'],
        "mail"             => $user['mail'],
        "role"             => $user['role'],
        "date inscription" => $user['date_inscription'],
        "edit"             => $functions
      );
    }
  }
} elseif ($job == 'get_company') {

  // Get company
  if ($id == '') {
    $result  = 'error';
    $message = 'id missing';
  } else {
    $query = $bdd->prepare("SELECT * FROM utilisateurs WHERE id = ? ");
    $query->execute(array($id));

    if (!$query) {
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
      $message = 'query success';
      while ($user = $query->fetch()) {
        $mysql_data[] = array(
          "id"               => $user['id'],
          "nom"              => $user['nom'],
          "prenom"           => $user['prenom'],
          "mail"             => $user['mail'],
          "role"             => $user['role'],
          "date inscription" => $user['date_inscription'],
        );
      }
    }
  }
} elseif ($job == 'delete_company') {

  // Delete company
  if ($id == '') {
    $result  = 'error';
    $message = 'id missing';
  } else {
    $query = $bdd->prepare("DELETE FROM utilisateur WHERE id = ? ");
    $query->execute(array($id));
    if (!$query) {
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
      $message = 'query success';
      $erreur = var_dump($query);
    }
  }
}

$data = array(
  "result"  => $result,
  "message" => $message,
  "data"    => $mysql_data
);

// Convert PHP array to JSON array
$json_data = json_encode($data);
print $json_data;
