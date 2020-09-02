<?php if(session_status()==PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Import CSV</title>
        <link rel="stylesheet" href="./csvStyle.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <nav>
            <button class="w3-button w3-black" onclick="formHandel()">CONNECT TO DB</button>
            <form method="post" action="process.php" enctype="multipart/form-data">
                <input name="upload-file" type="file" required>
                <button name="upload-form" type="submit" class="w3-button w3-black">UPLOAD</button>
            </form>

            <form method="post" action="process.php">
                <button name="import-data" type="submit" class="w3-button w3-black">IMPORT CSV</button>
            </form>

            <form method="post" action="process.php">
                <button name="show-data" type="submit" class="w3-button w3-black">GET CSV DATA</button>
            </form>

            <form method="post" action="process.php">
                <button name="remove-data" type="submit" class="w3-button w3-black">DROP DB</button>
            </form>
        </nav>
        <h4 class="w3-panel w3-pale-red w3-border">
            <?php 
                if(isset($_SESSION["alert"])){
                    echo $_SESSION["alert"];
                }
            ?>
        </h4>
        <div class="main-div">
            
            <form id="connectionForm" method="post" action="process.php" class="connection-form">
                <input name="user-name" type="text" placeholder="Database Username" required>
                <input name="password" type="password" placeholder="Database Password" required>
                <button name="db-info" class="btn-submit" type="submit">Submit</button>
            </form>
        </div>
        <?php if(isset($data)): ?>
            <table id="mytable">
                    <thead>
                        <tr>
                            <th>Row Id</th>
                            <th>Client</th>
                            <th>Client Id</th>
                            <th>Deal</th>
                            <th>Deal Id</th>
                            <th>Hour</th>
                            <th>Accepted</th>
                            <th>Refused</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $row): ?>
                            <tr>
                                <td><?=$row[0]?></td>
                                <td><?=$row[3]?></td>
                                <td><?=$row[1]?></td>
                                <td><?=$row[4]?></td>
                                <td><?=$row[2]?></td>
                                <td><?=$row[5]?></td>
                                <td><?=$row[6]?></td>
                                <td><?=$row[7]?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
            </table>
        <?php endif ?>
        <script src="./connect.js"></script>
    </body>
</html>