<?php
$con = mysqli_connect('localhost', 'zmzugfwn', 'PKWwmZG31hsxdF', 'zmzugfwn_site')
    or die("connection failed" . mysqli_errno());

$request = $_REQUEST;
$col = array(
    0   =>  'id',
    1   =>  'nom',
    2   =>  'prenom',
    3   =>  'mail',
    5   =>  'date_inscription'
);  //create column like table in database

$sql = "SELECT * FROM utilisateurs";
$query = mysqli_query($con, $sql);

$totalData = mysqli_num_rows($query);

$totalFilter = $totalData;

//Search
$sql = "SELECT * FROM utilisateurs WHERE 1=1";
if (!empty($request['search']['value'])) {
    $sql .= " AND (id Like '" . $request['search']['value'] . "%' ";
    $sql .= " OR nom Like '" . $request['search']['value'] . "%' ";
    $sql .= " OR prenom Like '" . $request['search']['value'] . "%' ";
    $sql .= " OR mail Like '" . $request['search']['value'] . "%' )";
    $sql .= " OR date_inscription Like '" . $request['search']['value'] . "%' )";
    $sql .= " OR role Like '" . $request['search']['value'] . "%' )";
}
$query = mysqli_query($con, $sql);
$totalData = mysqli_num_rows($query);

//Order
$sql .= " ORDER BY " . $col[$request['order'][0]['column']] . "   " . $request['order'][0]['dir'] . "  LIMIT " .
    $request['start'] . "  ," . $request['length'] . "  ";

$query = mysqli_query($con, $sql);

$data = array();

while ($row = mysqli_fetch_array($query)) {
    $subdata = array();
    $subdata[] = $row[0]; //id
    $subdata[] = $row[1]; //name
    $subdata[] = $row[2]; //salary
    $subdata[] = $row[3]; //age 
    $subdata[] = $row[5];


    //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database

    $data[] = $subdata;
}

$json_data = array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);
