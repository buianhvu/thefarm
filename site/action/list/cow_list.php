<?php
require 'system/animal.php';
$aniaml = get_all_cow();
?>
 
<?php
load_header();
load_sidebar();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Cow list</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Cow list</h1>
        <a href="index.php?action=animal-add">Add a cow</a> <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                    <td>ID</td>
                    <td>Animal</td>
                    <td>Sex</td>
                    <td>Health Index</td>
                    <td>weight</td>
    <td> source</td>
    <td> account</td>
            </tr>
            <?php foreach ($aniaml as $item){ ?>
            <tr>
                <td><?php echo $item['Id']; ?></td>
                <td><?php echo $item['Animal_ID']; ?></td>
                <td><?php echo $item['Sex']; ?></td>
                <td><?php echo $item['Health_Index']; ?></td>
 <td><?php echo $item['Weight']; ?></td>
 <td><?php echo $item['Source']; ?></td>
 <td><?php echo $item['Account']; ?></td>
                <td>
                        <form method="post" action="index.php?action=animal_delete">
               
                        <input type="hidden" name="id" value="<?php echo $item['Id']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
            </tr>
            <?php } ?>

        </table>
 <?php

?>
    </body>
</html>