<?php

class View
{
    function  generate ($content_view, $template_view, $data = null)
    {
        include DIR_CATALOG.DIR_VIEW.$template_view.'.php';
    }

    function generate_admin_panel($content_view, $template_admin_panel)
    {
        include DIR_CATALOG.DIR_VIEW.$template_admin_panel.'.php';
    }

}