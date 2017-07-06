<?php
    $headers = array("名字", "时间", "总集", "已看");
    $lines = array("", "", "", "", "");
    $content = array("海贼王", "1998年", "800+", "否");
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <?php
                        foreach ($headers as $eachHeader) {
                            echo '<th>'.$eachHeader.'</th>';
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($lines as $line) {
                        echo '<tr>';
                        foreach ($content as $item) {
                            echo '<td>'.$item.'</td>';
                        }
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>