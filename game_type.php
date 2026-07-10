<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประดภทเกม</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
    error_reporting(E_ALL);

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

        include 'action/connect.php';

        $sql = "SELECT * FROM game_types";
        $result = mysqli_query($con, $sql);
    ?>

  <div class="container">

    <h1>🎮 ประเภทเกม</h1>

    <table>
        <thead>
            <tr>
                <th>รหัสประเภท</th>
                <th>ประเภทเกม</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach($result as $game_types){
            ?>
                <tr>
                    <td><?= $game_types["type_id"] ?></td>
                    <td><?= $game_types["type_name"] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <a href="index.php" class="back-btn">← กลับหน้ารายการเกม</a>

</div>

</body>
</html>