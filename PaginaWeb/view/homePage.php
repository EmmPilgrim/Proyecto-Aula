<?php
include_once("../model/general/meta.php");
include_once("../model/homePage/content.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php
        //CSS
         $meta = new meta;
         $meta->itemMeta();
         $meta->responsive();
         $meta->fonts();
         $meta->icon();
         $meta->boostrap();
         $meta->layout();
         //JS
         $meta->jQuery();
         $meta->bootstrap();
        ?>
        <title>ChloeV9</title>
    </head>
    <body>
        <?php
        $content = new content;
        $content->imagen();
        $content->texto();
        ?>
    </body>
</html>
