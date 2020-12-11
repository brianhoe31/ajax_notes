<?php

    if(!empty($msg)){
        foreach($msg as $val){ ?>

            <div>
                <form class="delete_note" action="/messages/update/<?= $val['id'] ?>" method="post">
                    <h1><?= $val['title'] ?></h1>
                    <input type="text" name="text" value="<?= $val['comment'] ?>">
                    <input type="submit" value="Add Msg">
                    <input type="hidden" name="action" value="add">
                </form>

                <form class="update_note" action="/messages/delete/<?= $val['id'] ?>" method="post">
                    <input type="submit" value="delete">
                    <input type="hidden" name="action" value="delete">
                </form>
            </div>
            <hr>

    <?php }
} ?> 
