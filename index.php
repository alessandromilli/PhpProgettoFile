<?php
$files = scandir("./risorse/");
$extensions = [];
$i = 0;
$files = preg_grep('/[a-zA-Z]+\\.[a-zA-Z]+/i', $files);
sort($files);
$i=0;
foreach ($files as $file) {
    $extensions[$i] = explode(".", $file)[1];
    $i = $i + 1;
}
$extensions = array_unique($extensions);
?>
<html>
<head>

</head>
<body>
<form action="post.php" method="post">
<select id="ext" name="ext">
    <option value="" selected disabled hidden>Estensione</option>
    <?php
    foreach ($extensions as $extension){
        echo "<option value=\"$extension\">$extension</option>";
    }
    ?>
</select>
    <input type="submit">
</form>

</body>
</html>
