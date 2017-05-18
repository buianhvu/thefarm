<?php
require 'system/animal.php';
$animal = get_all_pig();
?>
 
<?php
load_header();
load_sidebar();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Pig list</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Pig list</h1>
      <form method="post" action="index.php?action=list/add_animal">
               
  <input type="hidden" name="animal_id" value="1"/>
<input type="submit" name="submit" value="add a pig" style="float: right;">
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
            <?php foreach ($animal as $item){ ?>
            <tr>
                <td><?php echo $item['Id']; ?></td>
                <td><?php echo $item['Animal_ID']; ?></td>
                <td><?php echo $item['Sex']; ?></td>
                <td><?php echo $item['Health_Index']; ?></td>
 <td><?php echo $item['Weight']; ?></td>
 <td><?php echo $item['Source']; ?></td>
 <td><?php echo $item['Account']; ?></td>
                <td>
                        <form method="post" action="index.php?action=list/pig_delete">
               
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