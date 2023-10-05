<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ADD MEMBER - manage member</title>
</head>

<body>
    <div class="sign_member">
        <a href="index.php?controller=member&action=list" class='list'>List member</a>
        <h3>Them moi thanh vien</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Ten thanh vien: </td>
                    <td><input type="text" name='name' placeholder="Ten thanh vien"></td>
                </tr>
                <tr>
                    <td>Nam sinh: </td>
                    <td><input type="text" name='birthday' placeholder="Nam sinh"></td>
                </tr>
                <tr>
                    <td>Que quan</td>
                    <td><input type="text" name='hometown' placeholder="Que quan"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name='add_user' value='addUser'></td>
                </tr>

            </table>
        </form>
        <?php
            if(isset($successArr) && in_array('add_success', $successArr)){
                echo '<h1 style ="color:green; text-align:center;">ADD NEW MEMBER SUCCESSFULLY</h1>';
            }
        ?>
    </div>
</body>

</html>