<?php

class View
{
    public function carregar($pagina, $dados = null){

        include $pagina;
    }

}