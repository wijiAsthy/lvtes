<?php
include('read.php');
include('create.php');
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>lv komentar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="comment-box">
    <h1>Hallo! Schön, dass du hier bist!</h1>
    <h3> Ich bin gerade beschäftigt, aber hinterlasse mir doch gerne eine Nachricht!</h3>

    <form method="post" action="" >
        <textarea name="komentar" placeholder="Trag hier deine Nachricht für mich ein!"></textarea>
        <input type="text" name="name" placeholder="Trag hier noch deinen Namen ein!">
        <button type="submit" name="create">Nachricht absenden</button>
        <p style="color:red"><?php if(!empty($msg)){echo $msg; }?></p>
    </form>
    <h2>Deine Nachricht</h2>
    <table border="0">
        <tr>
            <th>Komentar</th>
            <th>Name</th>
        </tr>
</div>


    <?php
    if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
    ?>

    <tr>

        <td><?php echo $data['komentar']; ?></td>
        <td><?php echo $data['name']; ?></td>
    </tr>
        <?php
         $sn++; } }else{
        ?>
        <tr>
            <td colspan="7">No Data Found</td>
        </tr>

        <?php
             }
        ?>

</body>
</html>