<?php

header("Content-Type: application/json");

require_once "app/Controllers/ProductController.php";

$controller = new ProductController();

$action = $_GET["action"] ?? "index";
$id = $_GET["id"] ?? null;

switch ($action) {

    case "index":
        $controller->index();
        break;

    case "show":
        $controller->show($id);
        break;

    case "store":
        $controller->store();
        break;

    case "update":
        $controller->update($id);
        break;

    case "delete":
        $controller->delete($id);
        break;

    default:
        echo json_encode(["status"=>false,"message"=>"Action tidak valid"]);
}
