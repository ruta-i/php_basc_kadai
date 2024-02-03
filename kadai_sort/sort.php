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
                if($order ===TRUE){
                    sort($array);
                    echo '昇順にソートします' . '<br>';
                }else{
                    rsort($array);
                    echo '降順にソートします' . '<br>';
                }
                foreach($array as $value){
                    echo "{$value}<br>";
                }
            };

            sort_2way($nums,TRUE);
            sort_2way($nums,FALSE);
            ?>
        </p>
    </body>
</html>