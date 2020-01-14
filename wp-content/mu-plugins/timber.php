<?php
add_filter('timber_context', function ($context) {
    $context['menu']['menu_primary'] = new Timber\Menu('main_menu');
    $context['menu']['menu_footer'] = new Timber\Menu('footer_menu');
    $context['menu']['menu_social'] = new Timber\Menu('social_menu');
    $context['menu']['menu_social'] = new Timber\Menu('social_menu');
    $context['options'] = get_fields('options');
    return $context;
});

add_filter('timber/twig', function ($twig) {
    $twig->addFunction(new \Twig_SimpleFunction("get_global_options", function () {
        return Timber::get_context();
    }));
    $twig->addFunction('get_menu_by_id', new Twig_SimpleFunction('get_menu_by_id', function ($id) {
        $menu = new TimberMenu($id);
        return $menu;
    }));
    return $twig;
});