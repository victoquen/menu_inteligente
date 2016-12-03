<!DOCTYPE html>
<html>
    <head>
        <title>Un menu inteligente</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            ul{
                margin-left: 230px;
            }
            li{
                float: left;
                list-style: none;
                margin: 1px;
            }
            a{
                padding: 12px 40px;
                text-decoration: none;
                background: #222;
                color:#fff;
                font-size: 15px;
                border-radius: 8px;
                -webkit-border-radius: 8px;
            }
            .ventana_actual{
                background: #B23B1D;
                color: #fff;
            }
            .resto_ventanas{
                background: #131009;
                color: #fff;
            }
        </style>
    </head> 
    <body>
        <?php
        $menu =  json_decode('
        [{"nombre":"Inicio","url":"index.php","link":"/menu_inteligente/index.php"},
        {"nombre":"Codeigniter","url":"codeigniter.php","link":"/menu_inteligente/codeigniter.php"},
        {"nombre":"Php","url":"php.php","link":"/menu_inteligente/php.php"},
        {"nombre":"Html y css","url":"html_css.php","link":"/menu_inteligente/html_css.php"},
        {"nombre":"Accesos con mysql","url":"acceso_mysql.php","link":"/menu_inteligente/acceso_mysql.php"}]');  
        ?>
        <ul>
        <?php
        foreach($menu as $botones){
        $clase = ($botones->link == $_SERVER['REQUEST_URI'] ? 'ventana_actual' : 'resto_ventanas');
        ?>        
            <li><a class="<?=$clase?>" href="<?=$botones->url?>"><?=$botones->nombre?></a></li>
        <?php       
        } 
        ?>
        </ul>