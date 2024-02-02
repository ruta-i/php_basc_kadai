<!DOCTYPE html>
<html lang='ja'>
    <head>
        <meta charset='utf-8'>
        <title>PHP基礎編</title>
    </head>    

    <body>
        <p>
            <?php
            $nums =[15,4,18,23,10];
            function sort_2way($array,$order){
                if($order===1){
                    sort($array);
                    echo '昇順にソートします<br>';
                    foreach($array as $value){
                        echo "{$value}<br>";
                    };
                }else{
                    rsort($array);
                    echo '降順にソートします<br>';
                    foreach($array as $value){
                        echo "{$value}<br>";
                    };
                };
            };

            sort_2way($nums,1);
            sort_2way($nums,5);
            ?>
        </p>
    </body>
</html>