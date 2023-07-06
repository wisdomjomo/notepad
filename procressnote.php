<?php
if(isset($_POST['create'])){
    require_once("configuration.php");
    $sc = new configuration();

    $sc->settitle($_POST['title']);
    $sc->setcontent($_POST['content']);
    $sc->insertNoteDate();
    echo "<script>alert('Your Note has been save successfully');document.location='viewallnote.php'</script>";
}

?>