<?php

   if(isset($_POST['sub'])){
        $img = $_FILES['upload']['name'];
    $img_loc=$_FILES['upload']['tmp_name'];
    $img_folder ="admin/login-form/pdf_folder/";

    if(move_uploaded_file($img_loc,$img_folder,$img)){
        ?>
        <script>console.log("Success");</script>
        <?php
    }
    
    $re="admin/login-form/pdf_folder/".$img;
    
    echo $re;
   }

?>