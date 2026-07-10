<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการเกม</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
    //แสดง error
    // Report all PHP errors
    error_reporting(E_ALL);

    // Force errors to be displayed on the screen
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

        include 'action/connect.php';

        //$con = false
        //!$con = true

        // if(!$conn){
        //     echo 'Connect Success.';
        // }else{
        //     echo 'Can Not Connect DB.';
        // }

        $sql = "SELECT * FROM game_";
        //                 ทำงานที่ไหน, ทำอะไร
        $result = mysqli_query($con, $sql);
        // ทดสอบ
        // var_dump($result);
    ?>

    <div class="container">

    <h1>🎮 รายการเกม</h1>

    <table>
        <thead>
            <tr>
                <th>รหัสเกม</th>
                <th>ชื่อเกม</th>
                <th>ราคา</th>
                <th>ภาพปก</th>
                <th>ประเภท</th>
            </tr>
        </thead>

        <tbody>
        <?php
        foreach($result as $game){
        ?>
            <tr>
                <td><?= $game["game_id"] ?></td>
                <td><?= $game["game_name"] ?></td>
                <td class="price">
                    <?= number_format($game["game_price"],2) ?> ฿
                </td>
                <td>
                    <img src="<?= $game["game_cover"] ?>" alt="">
                </td>
                <td><?= $game["type_id"] ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>

    </table>

    <a href="game_type.php" class="back-btn">ไปหน้าประเภทเกม →</a>

</div>
</body>
</html>