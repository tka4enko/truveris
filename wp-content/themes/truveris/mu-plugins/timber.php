<?php
add_filter('timber_context', function ($context) {
    $context['menu']['menu_primary'] = new Timber\Menu('main_menu_header');
    return $context;
});

add_filter('timber/twig', function ($twig) {
    $twig->addFunction('render_star_rating', new Twig_SimpleFunction('render_star_rating', function ($value) {
        $output = render_star_rating($value);
        if ($output) {
            return $output;
        } else {
            return '';
        }
    }));
    $twig->addFunction(new \Twig_SimpleFunction("get_global_options", function () {
        return Timber::get_context();
    }));
    $twig->addFunction('get_menu_by_id', new Twig_SimpleFunction('get_menu_by_id', function ($id) {
        $menu = new TimberMenu($id);
        return $menu;
    }));
    return $twig;
});