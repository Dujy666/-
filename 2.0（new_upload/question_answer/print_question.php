<?php
class give_question{
    function print_q_a($lesson,$tb,$lesson_mark){

        $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
        mysqli_query($conn,"set names 'utf8'");

        $user = $_COOKIE['username'];
        $sql = "select $lesson_mark from tb_score where name='$user'";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_row($result);
        if($rows[0]==1){
            $mark = 1;
            echo "<script type='text/javascript'>alert('你已经完成测试，答案已给出');</script>";
        }else{
            $mark = 0;
        }
        ?>
        <table>
            <?php
            $sql_answer = "select * from tb_answer where lesson='$lesson'";
            $return_answer = mysqli_query($conn,$sql_answer);
            $answer = mysqli_fetch_row($return_answer);
            for($n = 1;$n<=10;$n++){
            $sql_ques = "select * from $tb where num='$n'";
            $return = mysqli_query($conn, $sql_ques);
            $question = mysqli_fetch_row($return);
            ?>
            <tr>
                <td><?php echo "<strong>$question[1]</strong>";
                    if ($mark == 1) {
                        if($lesson=='politics'){
                            if($n>5){
                                switch ($answer[$n]){
                                    case 1: echo '<strong><font color="red">对</font></strong>';break;
                                    case 0: echo '<strong><font color="red">错</font></strong>';break;
                                }
                            }else{
                                switch ($answer[$n]){
                                    case 1: echo '<strong><font color="red">A</font></strong>';break;
                                    case 2: echo '<strong><font color="red">B</font></strong>';break;
                                    case 3: echo '<strong><font color="red">C</font></strong>';break;
                                    case 4: echo '<strong><font color="red">D</font></strong>';break;
                                }
                            }
                        }else{
                            switch ($answer[$n]){
                                case 1: echo '<strong><font color="red">A</font></strong>';break;
                                case 2: echo '<strong><font color="red">B</font></strong>';break;
                                case 3: echo '<strong><font color="red">C</font></strong>';break;
                                case 4: echo '<strong><font color="red">D</font></strong>';break;
                            }
                        }

                    } else {
                        echo ' ';
                    } ?></td>
            </tr>
            <tr>
                <?php
                if($lesson=='politics'){
                    if($n>5) {
                        $true = 1;
                        for ($m = 1; $m <= count($question) - 4; $m++) {
                            ?>
                            <td><input type="radio" name="question<?php echo $n ?>"
                                       value="<?php if($m%2!=0){echo $true;}else{echo $true-1;} ?>"><?php echo $question[$m + 1] ?></td>
                            <?php
                        }
                    }else{
                        for ($m = 1; $m <= count($question) - 2; $m++) {
                            ?>
                            <td><input type="radio" name="question<?php echo $n ?>"
                                       value="<?php echo $m ?>"><?php echo $question[$m + 1] ?></td>
                            <?php
                        }
                    }
                }else{
                    for ($m = 1; $m <= count($question) - 2; $m++) {
                        ?>
                        <td><input type="radio" name="question<?php echo $n ?>"
                                   value="<?php echo $m ?>"><?php echo $question[$m + 1] ?></td>
                        <?php
                    }
                }
                }
                ?>
            </tr>



            <tr><td><?php if($mark!=1){
                        ?>
                        <input type="submit" name="sub" value="提交">
                        <?php
                    }
                    ?></td></tr>
        </table>
        <?php
    }
}
?>
