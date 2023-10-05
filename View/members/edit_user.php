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
        <h3>Update member</h3>

        <form action="" method="post">
            <table>
                <tr>
                    <td>Ten thanh vien: </td>
                    <td><input type="text" name='fullname' value="<?php echo $dataId['fullname']; ?>"
                            placeholder="Ten thanh vien"></td>
                </tr>
                <tr>
                    <td>Nam sinh: </td>
                    <td><input type="text" name='birthday' value="<?php echo $dataId['birthday']; ?>"
                            placeholder="Nam sinh"></td>
                </tr>
                <tr>
                    <td>Que quan</td>
                    <td><input type="text" name='hometown' value="<?php echo $dataId['hometown']; ?>"
                            placeholder="Que quan"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name='update_user' value='Update'></td>
                </tr>

            </table>
        </form>
    </div>
</body>

</html>