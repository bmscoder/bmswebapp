<!DOCTYPE html>
<html lang="uz">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Basic Matrix System</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head> 
<body>
    <?php
    if(isset($_GET['n1']) and isset($_GET['n2']) and isset($_GET['m1']) and isset($_GET['m2'])){
    ?>
	<form action="result.php" method="POST">
        <div class="container">
            <p>A matritsani kiriting:</p>
        <table>
            <tr>
                <th>A</th>
                <?php for ($j=1; $j <= $_GET['m1']; $j++) { ?>
                    <th><?php echo $j; ?></th>
                <?php } ?>
            </tr>
            <?php for ($i=1; $i <= $_GET['n1']; $i++) { ?>
                <tr>
                    <th><?php echo $i; ?></th>
                    <?php for ($k=1; $k <= $_GET['m1']; $k++) { ?>
                        <td><input id="element" name="matrix-<?php echo $i-1; ?>-<?php echo $k-1; ?>" title="[<?php echo $i; ?>,<?php echo $k; ?>]" type="text" size="4" required=""/></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
        </div>
        <div class="container">
            <p>B matritsani kiriting:</p>
            <table>
                <tr>
                    <th>B</th>
                    <?php for ($j=1; $j <= $_GET['m2']; $j++) { ?>
                        <th><?php echo $j; ?></th>
                    <?php } ?>
                </tr>
                <?php for ($i=1; $i <= $_GET['m1']; $i++) { ?>
                    <tr>
                        <th><?php echo $i; ?></th>
                        <?php for ($k=1; $k <= $_GET['m2']; $k++) { ?>
                            <td><input id="element" name="matrix2-<?php echo $i-1; ?>-<?php echo $k-1; ?>" title="[<?php echo $i; ?>,<?php echo $k; ?>]" type="text" size="4" required=""/></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
        </div>
            <div class="buttons">
                <input type="hidden" name="n1" value="<?php echo $_GET['n1']; ?>" />
                <input type="hidden" name="m1" value="<?php echo $_GET['m1']; ?>" />
                <input type="hidden" name="n2" value="<?php echo $_GET['m1']; ?>" />
                <input type="hidden" name="m2" value="<?php echo $_GET['m2']; ?>" />
                <input class="btn" name="resetButton" type="reset" value="Tozalash">
                <input class="btn" name="submitButton" type="submit" value="Ko'paytirish">
            </div>
    </form>
    <?php }else{ ?>
    <div id="main">
        <h1>Basic Matrix System</h1>
        <p>Matritsalarni bir-biriga ko'paytirish mumkin bo'lishi uchun 1-matritsaning ustunlari soni 2-matritsaning satrlari soniga teng bo'lishi kerak.</p>
        <p>Ko'paytirish natijasida satrlari soni 1-matritsanidek va ustunlari soni 2-matritsaniki kabi miqdordagi yangi matritsaga ega bo'lasiz.</p>
        <p>Masalan, agar siz 'n' x 'k' matritsani 'k' x 'm' o'lchamli matritsaga ko'paytirsangiz, 'n' x 'm' o'lchamlik yangi matritsa hosil bo'ladi.</p>
    </div>
    <form id="form" method="GET">
        <div class="container">
        A matritsa o'lchami:
        <input id="n1" name="n1" title="n" class="asSelect" type="number" pattern="[0-9]*" inputmode="numeric" required="" value="1" min="1" max="99" step="1">
        X
        <input id="m1" name="m1" title="k" class="asSelect" type="number" pattern="[0-9]*" inputmode="numeric" required="" value="1" min="1" max="99" step="1">
        </div>
        <div class="container">
        B matritsa o'lchami:
        <input id="n2" name="n2" title="k" class="asSelect" type="number" pattern="[0-9]*" inputmode="numeric" required="" value="1" min="1" max="99" step="1">
        X
        <input id="m2" name="m2" title="m" class="asSelect" type="number" pattern="[0-9]*" inputmode="numeric" required="" value="1" min="1" max="99" step="1">
        </div>
        <input class="btn" type="submit" value="Davom etish">
    </form>
    <?php } ?>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
</body>
</html>