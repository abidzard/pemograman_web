<html>
<form action="form.php" method="POST">
<table bgcolor="gray">
    <tr>
        <td>NAMA</td>
        <td><input type="text" name="name" value=""></td>
    </tr>
    <tr>
        <td>NPM</td>
        <td><input type="text" name="npm" value=""></td>
    </tr>
    <tr>
        <td>LOOPING</td>
        <td><input type="text" name="loop" value=""></td>
    </tr>
    <tr>
        <button type="submit" name="submit">INPUT</button>
    </tr>
</table>
</form>

</html>

<?php
    error_reporting(0);
$nama = $_POST['name'];
$npm = $_POST['npm'];
$loop = $_POST['loop'];

if($nama){
    echo 'Nama : ' ,$nama;
    echo '<br>NPM : ' .$npm;
    echo '<br>';
    for($i = 0; $i <= $loop; $i++){
        for($j = 0; $j < $i; $j++){
            echo '<img height="200px" src="./asset/Fymryn.png">';
        }
        echo '<br>';
    }

}

?>