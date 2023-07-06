<?php
require_once("configuration.php");

$record = new configuration();

if(isset($_GET['id']) && isset($_GET['reg'])) {
    if($_GET['reg'] == "delete") {
        $record->setid($_GET['id']);
        $record->delete();
        echo "<script>alert('Note deleted Successfully');document.location='viewallnote.php'</script>";
    
    }
}
?>