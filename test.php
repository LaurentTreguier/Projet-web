<html>
    <head>
        <title>
            Limonade
        </title>
    </head>
    
    <body>
        <?php
            require_once 'lib/limonade.php';
            
            function test()
            {
                return '
                    <p>
                        '.params(0).'YOLO
                    </p>
                    ';
            }
            
            dispatch_post('*', 'test');
            
            run();
        ?>
    </body>
</html>
