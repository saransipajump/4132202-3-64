<?php

require("../funtion/condb.php");

$sql = "SELECT * from tb_member ORDER BY username ASC";
$result = $mysqli->query($sql);
?>

<table>
    <tr>
        <td>ID</td>
        <td>username</td>
        <td>password</td>
        <td></td>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["username"] ?></td>
            <td><?= $row["password"] ?></td>
            <td><button class="btn_del_member" data-id="<?= $row["id"] ?>">
                    DEL
                </button>
                <button class="btn_edit_member" data-id="<?= $row["id"] ?>">
                    EDIT
                </button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

<script>
    $(".btn_del_member").click(function() {
        let id = $(this).data("id");
        //alert(id);
        $.ajax({
            url:"./query/del_member.php",
            method: "GET",
            data: {
                id: id
            },
            success: function(msg) {
                //alert(msg);
                $("#div_dt").load("./query/dt_member.php");
            }
        });
    });
</script>