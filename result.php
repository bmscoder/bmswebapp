<?php

$result = array();

if(isset($_POST['submitButton'])){
    $matrix_A = array();
    for($x = 0; $x < $_POST['n1']; $x++){
        for($y = 0; $y < $_POST['m1']; $y++){
            $matrix_A[$x][$y] = floatval($_POST['matrix-'.$x.'-'.$y]);
        }
    }
    $matrix_B = array();
    for($x = 0; $x < $_POST['n2']; $x++){
        for($y = 0; $y < $_POST['m2']; $y++){
            $matrix_B[$x][$y] = floatval($_POST['matrix2-'.$x.'-'.$y]);
        }
    }
    $query = json_decode(file_get_contents("https://bms.testai.uz/matrix/multiplication?A=".json_encode($matrix_A)."&B=".json_encode($matrix_B)),true);
    if($query['status'] == "ok"){
        $result = json_decode($query['result']);
    }elseif($query['error']){
        echo $query['error'];
    }else{
        echo "Something went wrong.";
    }
}

?>

<!DOCTYPE html>
<html lang="uz">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Basic Matrix System</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head> 
<body>
    <p>Natija:</p>
    <div class="container">
        <table>
            <tr>
                <th>C</th>
                <?php for ($j=1; $j <= count($result[0]); $j++) { ?>
                    <th><?php echo $j; ?></th>
                <?php } ?>
            </tr>
            <?php for ($i=1; $i <= count($result); $i++) { ?>
                <tr>
                    <th><?php echo $i; ?></th>
                    <?php for ($k=1; $k <= count($result[0]); $k++) { ?>
                        <td class="data" title="[<?php echo $i; ?>,<?php echo $k; ?>]"><?php echo $result[$i-1][$k-1] ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="container">
    <a href="https://bms.testai.uz/index.php">Qayta hisoblash</a>
    </div>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
</body>
</html>