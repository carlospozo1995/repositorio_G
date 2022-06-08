<?php
    include "C:/laragon/www/carlos/G/dataBase/connect.php";
 
    $sql_menu = "SELECT * FROM cg.menu_categoria";
    $menu_data = consulta($conexion, $sql_menu);
    
    if (count($menu_data) > 0) {
        $create = array();
        createMenu($menu_data, $menu_data, $create);
        $create = array_unique($create);

        if (count($menu_data) > 0) {
            foreach ($create as $key => $value) {
                unset($menu_data[$value]);
            }

            $html = '<ul class="menu">';
                printMenu($menu_data, $html);
            $html.= '</ul>';
            echo $html;
        }
    }

    function createMenu(&$menu_dataC, $menu_dataM, &$create){
        foreach ($menu_dataC as $key => $value) {
            $id_menu = $value['id'];

            $son_menu = array_filter($menu_dataM, function($item_id) use($id_menu){
                return $item_id['father_id'] == $id_menu;
            });

            if (count($son_menu) > 0) {
                $menu_dataC[$key]['sons'] = $son_menu;

                $create = array_merge($create, array_keys($son_menu));
                createMenu($menu_dataC[$key]['sons'], $menu_dataM, $create);
            }
        }
    }

    function printMenu($menu_data, &$menu_html){
        foreach ($menu_data as $key => $value) {
            // $item_cat = str_replace(' ', '-',$value['item_menu']) . '/';

            $menu_html.= '<li class="menu_item">';
                $menu_html.= '<div class="section_responsive">';
                    $menu_html .= '<a href="category.php?option='.$value['id'].'"><div><img src="img/icon_g/'.$value['icon_item'].'" alt=""></div><span>'.$value["item_menu"].'</span></a>';
                    $menu_html .= '<i class="fa-solid fa-chevron-down"></i>';
                $menu_html.= '</div>';

                if (isset($menu_data[$key]['sons']) && count($menu_data[$key]['sons']) > 0) {
                    $menu_html .= '<ul class="submenu">';
                            printSub($menu_data[$key]['sons'], $menu_html);
                    $menu_html .= '</ul>';
                }
            $menu_html.= '</li>';
        }
    }

    function printSub($sub_data, &$sub_html){
        foreach ($sub_data as $key => $value) {
            // $sub_cat = $item_cat . str_replace(' ', '-', $value['item_menu']) . '/';
            
            $sub_html .= '<li class="item_submenu">';
                $sub_html .= '<a href="category.php?option='.$value['id'].'">'.$value['item_menu'].'</a>';

            if (isset($sub_data[$key]["sons"]) && count($sub_data[$key]["sons"]) > 0) {
                $sub_html .= '<ul class="submenu_next">';
                            printSubNext($sub_data[$key]['sons'], $sub_html);
                $sub_html .= '</ul>';
            }
            $sub_html .= '</li>';
        }
    }
    
    function printSubNext($next_sub_data , &$sub_next_html){
        foreach ($next_sub_data as $key => $value) {
            // $subNext_cat = $sub_cat . str_replace(' ', '-', $value['item_menu']);

            $sub_next_html .= '<li class="item_submenu_next">';
            $sub_next_html .= '<a href="category.php?option='.$value['id'].'">'.$value['item_menu'].'</a>';
            $sub_next_html .= '</li>';
        }
    }
    

?>