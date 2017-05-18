<?php
$animal_id=$_POST['animal_id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>add animal</title>
    </head>
    <body>
        <h1>add animal</h1>
        <form action="index.php?action=list/manage_add" method="POST">
            <table cellpadding="0" cellspacing="0" border="1">
                <tr>
                    <td>
                        Health Index:
                    </td>
                    <td>
                            <input type="number" name="health_index" size="50" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Weight:
                    </td>
                    <td>
                            <input type="number" name="weight" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        source :
                    </td>
                    <td>
                        <input type="text" name="source" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Import :
                    </td>
                    <td>
                        <input type="text" name="date" size="50" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Sex :
                    </td>
                    <td>
                        <select name="txtSex">
                           
                            <option value="1">male</option>
                            <option value="0">female</option>
                        </select>
                    </td>
                </tr>
            </table>
<input type="hidden" name="animal_id"value="<?php echo $animal_id?>"/>
            <input type="submit" value="add" />
            <input type="reset" value="Nhập lại" />


        </form>
    </body>
</html>
