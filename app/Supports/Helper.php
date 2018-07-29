<?php

if ( !function_exists('render_menu') ){
    function render_menu($menu){
        $template = '<ul>%s</ul>';
        $list = '';

        foreach($menu as $item){
            $temp = '<li>';
            $temp .= $item->label;

            if($item->sub){
                $temp .= render_menu($item->sub);
            }

            $temp .= '</li>';

            $list .= $temp;
        }

        return sprintf($template, $list);
    }
}
