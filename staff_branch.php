<?php

    $staff_code = @$_POST['staffcode'] ?: '';

    if (empty($staff_code)) {
        header('Location: staff_ng.php');
        exit();
    }

    print($staff_code.'番のスタッフコードを選びました<br />');

    if (isset($_POST['edit'])) {
        print('修正ボタンが押されました');
        header('Location: staff_edit.php?staffcode='.$staff_code);
        exit();
    }

    if (isset($_POST['delete'])) {
        print('削除ボタンが押されました');
        header('Location: staff_delete.php?staffcode='.$staff_code);
        exit();
    }