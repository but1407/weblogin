<h1>DELETE USER</h1>


<form action="" method="post">
    <table>
        <tr>
            <td>Ten thanh vien: </td>
            <td><input type="text" name='fullname' value="<?php echo $dataId['fullname']; ?>"
                    placeholder="Ten thanh vien"></td>
        </tr>
        <tr>
            <td>Nam sinh: </td>
            <td><input type="text" name='birthday' value="<?php echo $dataId['birthday']; ?>" placeholder="Nam sinh">
            </td>
        </tr>
        <tr>
            <td>Que quan</td>
            <td><input type="text" name='hometown' value="<?php echo $dataId['hometown']; ?>" placeholder="Que quan">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name='delete_user' value='delete'></td>
        </tr>

    </table>
</form>