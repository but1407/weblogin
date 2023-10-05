<link rel="stylesheet" href="style.css">

<div class="search">
    <form action="" method="get">
        <table>
            <tr>
                <input type="hidden" name="controller" value="member">
                <td><input type="text" name="keyword" placeholder="input keyword"></td>
                <td><input type="submit" value="search_user"></td>
            </tr>
        </table>
        <input type="hidden" name="action" value='search_user'>
    </form>
</div>
<div class="category">
    <table border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>fullname</th>
                <th>birthday</th>
                <th>hometown</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $stt = 1;
            foreach ($data as $key =>$value){
                
            ?>
            <tr>
                <td><?php echo $stt ?></td>
                <td><?php echo $value['fullname']; ?></td>
                <td><?php echo $value['birthday']; ?></td>
                <td><?php echo $value['hometown']; ?></td>
                <td>
                    <a href="index.php?controller=member&action=edit&id=<?php echo $value['id'];?>">Edit</a>
                    <a href="index.php?controller=member&action=delete&id=<?php echo $value['id']; ?> "
                        title="delete">Delete</a>
                </td>
            </tr>

            <?php

            $stt++;
            }
            ?>
        </tbody>
    </table>
</div>