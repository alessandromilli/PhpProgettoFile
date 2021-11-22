<?php
$selectedExt = htmlspecialchars($_POST['ext']);
function contains($var){
    if (strpos($var, htmlspecialchars($_POST['ext']))){
        return true;
    } else {
        return false;
    }
}
?>

<?php if ($selectedExt) : ?>
    <h1><?php echo $selectedExt ?>:</h1>
    <table>
        <?php
        $files = scandir("./risorse/");
        $files = array_filter($files,  "contains");
        sort($files);
        foreach ($files as $file){
            echo "<tr><td><a href='risorse/$file'>$file</a></td></tr>";
        }
        ?>
    </table>
<?php else : ?>
    <p>Non hai selezionato niente depensante</p>
<?php endif ?>