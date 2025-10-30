<?php
if ( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['nickname']) && isset($_POST['height']) && isset($_POST['weight'])){
    if ($_POST['username'] != ""  && $_POST['password'] != ""  && $_POST['nickname'] != ""  && $_POST['height'] != ""  && $_POST['weight'] != ""){
        $p_username = $_POST['username'];
        $p_password = $_POST['password'];
        $p_nickname = $_POST['nickname'];
        $p_height = $_POST['height'];
        $p_weight = $_POST['weight'];
        
        
        $SN = 'localhost';
        $UN = 'owner';
        $PW = '123456';
        $DB = 'testdb';
        
        $conn = mysqli_connect($SN, $UN, $PW, $DB);
        
        if (!$conn) {
            echo ("Could not connect to" . mysqli_connect_error());
        }
        echo ("Connect Successfully<br/>");
        // $sql_insert = "INSERT INTO user_info(Username,Password,Nickname,Height,Weight,Cname) VALUES('owner01','123456','Olive Oyl',185,60,'xxxxxx');";
        $sql_insert = "INSERT INTO user_info(Username,Password,Nickname,Height,Weight) VALUES('$p_username','$p_password','$p_nickname','$p_height','$p_weight');";
        if (!mysqli_query($conn, $sql_insert)) {
            echo ("Could not insert into user_info --- ".mysqli_error($conn));
        } else {
            echo ("Insert Successfully");
        }
    } else {
        echo ("錯誤.....資料有空白,請檢查");
    }

} else {
    echo ("錯誤.....缺少欄位,請檢查");
}

?>