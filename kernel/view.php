<?php

class View
{

    function  generate ($content_view, $template_view, $data = null, $pages=null)
    {
        include $_SERVER['DOCUMENT_ROOT'].'/'.DIR_VIEW.$template_view.'.php';
    }

    function generate_admin_panel($content_view, $template_admin_panel, $data = null, $pages= null)
    {
        include $_SERVER['DOCUMENT_ROOT'].'/'.DIR_VIEW.$template_admin_panel.'.php';
    }


}