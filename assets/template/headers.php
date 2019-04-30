<?php

class Header_publico{
    static function imprimir($titulo)
    {
        $header = "
            <!doctype html>
            <html lang=\"es\">
            <head>
                <meta charset=\"UTF-8\">
                <meta name=\"viewport\"
                      content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
                <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
                <title>{$titulo}</title>
                <link rel=\"stylesheet\" media=\"all\" href=\"" . ASSETS_PATH . "/estilo/toth-base.css\">
            </head>
            <body>
                <header>
                    <h1>{$titulo}</h1>
                    <nav>
                        <ul>
                            <li>
                                <a href=\"index.php\">Inicio</a>
                            </li>
                        </ul>
                    </nav>
                </header>";
        return $header;
    }
}