<?php
namespace Lib;

class Pages{
    public function render(string $pageName, array $params = null): void{
        if($params != null){
            foreach($params as $name => $value){
                $$name = $value;
            }
            require_once "Views/Layout/header.php";
            require_once "Views/$pageName.php";
            require_once "Views/Layout/footer.php";
        }
    }
}