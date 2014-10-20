<?php
    require_once "table.php";
    
    class Data extends Table
    {
        function __construct($id)
        {
            parent::__construct("document", $id);
        }
    }
?>
