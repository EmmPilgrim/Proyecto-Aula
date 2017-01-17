<?php

class content
{
    public function imagenPrincipal()
    {
        print(' <div class="imagen-parallax">
                        <div class="icono-app">
                            <span class="icon-pencil-square"></span>
                        </div>
                        <div class="icono-menu">
                            <span class="icon-menu"></span>
                        </div>
                        <div class="texto-imagen-parallax">
                            <h1>Nombre Aplicacion</h1>
                        </div>
                   </div> ');
    }
    public function texto()
    {
        print(' <div class="row">
                        <div class="col-md-12">
                            <div class="texto-parallax">
                                <div class="container">
                                    <p>
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                   </div>');
    }
    public function p(){
        print('Hola Mundo');
    }
}

 ?>
