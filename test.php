<html>
    <head>
        <title>
            Limonade
        </title>
    </head>
    
    <body>
        <?php
            require_once 'lib/limonade.php';
            
            function yolo()
            {
                echo '
                    <p>
                        '.params('name').'
                    </p>
                    ';
            }
            
            dispatch_post('/:name', 'yolo');
            
            run();
        ?>
    </body>
</html>
