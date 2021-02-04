<?php
include_once("db_connect.php");
$perPage = 5;
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
};
$startFrom = ($page - 1) * $perPage;
$sqlQuery = "SELECT id, name, age, address, skills, designation
	FROM developers ORDER BY id ASC LIMIT $startFrom, $perPage";
$result = mysqli_query($conn, $sqlQuery);
$paginationHtml = '';
while ($row = mysqli_fetch_assoc($result)) {
    $paginationHtml .= '<tr>';
    $paginationHtml .= '<td>' . $row["id"] . '</td>';
    $paginationHtml .= '<td>' . $row["name"] . '</td>';
    $paginationHtml .= '<td>' . $row["age"] . '</td>';
    $paginationHtml .= '<td>' . $row["address"] . '</td>';
    $paginationHtml .= '<td>' . $row["skills"] . '</td>';
    $paginationHtml .= '<td>' . $row["designation"] . '</td>';
    $paginationHtml .= '</tr>';
}
$jsonData = array(
    "html"    => $paginationHtml,
);
echo json_encode($jsonData);
