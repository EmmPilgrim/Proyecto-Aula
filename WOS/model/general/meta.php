<?php

class meta
{
    public function itemMeta()
    {
        print(' <meta http-equiv="X-UA-Compatible" content="IE=edge"> ');
    }
    public function responsive()
    {
        print(' <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> ');
    }
    public function boostrap()
    {
        print(' <link rel="stylesheet" href="../controller/css/bootstrap.min.css"> ');
    }
    public function layout()
    {
        print(' <link rel="stylesheet" href="../controller/css/style.css"> ');
    }
    public function fonts()
    {
        print(' <link href="https://file.myfontastic.com/MTmnqTBVLmiwrReRmMVUhB/icons.css" rel="stylesheet"> ');
    }
    public function icon()
    {
        print(' <link href="https://file.myfontastic.com/MTmnqTBVLmiwrReRmMVUhB/icons.css" rel="stylesheet"> ');
    }
    public function jQuery()
    {
        print(' <script src="../controller/js/jquery1.4.1.min.js"></script> ');
    }
    public function bootstrap()
    {
        print(' <script src="../controller/js/bootstrap.min.js"></script> ');
    }
}

?>
