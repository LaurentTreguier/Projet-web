<?php
    require_once "table.php";
    
    class Document extends Table
    {
        function __construct($id)
        {
            parent::__construct("document", "id", $id);
        }
    }
?>
