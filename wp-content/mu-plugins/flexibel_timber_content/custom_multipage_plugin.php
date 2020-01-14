<?php
require_once 'IncludeComponentsFile.php';
IncludeComponentsFile::includeFile();

class CustomMultipageCrateFile {
    function __construct($context= false){
        add_filter('acf/save_post', [$this,'is_field_group_exists'], 20 );
    }
    public function is_field_group_exists($post_id) {
        $field_groups = get_posts(array('post_type'=>'acf-field-group'));
        if (!empty($field_groups) && !wp_doing_ajax()){
            $this->createFile($post_id);
        }
    }
    private function createFile($post_id){
        $arr = [
            'post_type'   => 'any',
            'post_status' => 'publish',
            'numberposts' => -1,
        ];
        $postItem = get_post($post_id);
        if (!empty($postItem)){
            //foreach ($argsParam as $postItem){
            if(!function_exists('get_field_objects')){
                deactivate_plugins( plugin_basename( __FILE__ ) );
                add_action('admin_notices', function () {
                    echo '<div class="error"><p>  Custom Multipage plugin depends on Advanced Custom Fields PRO. Please enable it <a href="' . esc_url(admin_url('plugins.php#acf')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
                });
                return;
            }
            $argsObj = get_field_objects($postItem->ID);
            if (!empty($argsObj)){
                foreach ($argsObj as $item) {
                    if ($item['type'] === 'flexible_content'){
                        if (!empty($item['value'])){
                            foreach ($item['value'] as $val) {
                                $path = get_template_directory().'/modules/';
                                $fileTwig = $path.'/'.$val['acf_fc_layout'].'/'.$val['acf_fc_layout'].'.twig';
                                $fileJs = $path.'/'.$val['acf_fc_layout'].'/'.$val['acf_fc_layout'].'.js';
                                $fileLess = $path.'/'.$val['acf_fc_layout'].'/'.$val['acf_fc_layout'].'.scss';
                                $filePHP = $path.'/'.$val['acf_fc_layout'].'/'.$val['acf_fc_layout'].'.php';
                                if (!file_exists($path.$val['acf_fc_layout'])) {
                                    mkdir($path.$val['acf_fc_layout'], 0777, true);
                                }
                                if (!file_exists($fileTwig)){
                                    file_put_contents( $fileTwig , '{{dump(data)}}', FILE_APPEND);
                                }
                                if (!file_exists($fileLess)){
                                    file_put_contents( $fileLess , '', FILE_APPEND);
                                }
                                if (!file_exists($filePHP)){
                                    file_put_contents( $filePHP , '<?php function '.$val['acf_fc_layout'].'(){}', FILE_APPEND);
                                }
//                                if (!file_exists($fileJs)){
//                                    file_put_contents( $fileJs , ';(function ($) {})(jQuery);', FILE_APPEND);
//                                }
                            }
                        }
                    }
                }
            }
            //}
        }
    }
}
if (class_exists('CustomMultipageCrateFile')){
    new CustomMultipageCrateFile();
}
/**
 * Class CustomMultipagePlugin
 *
 * for render page (need to call class on page)
 */
class CustomMultipagePlugin {
    private $pageID;
    function __construct($context= false){

//        extends to timber custom functions get_global_options for global_option and get_menu_by_id for menu by id
        if (!is_admin()){
            $this->renderPage($context);
        }
//        render page

    }
//    if we need render header for all page
    private function ViewHeader($context = array()){
        Timber::render('views/partials/header.twig', $context);
    }
//    get all fields ACF from DB
    private function getDataObjec($taxObject = ''){
        return  get_field_objects($taxObject);
    }
//    view content with data from ACF
    private function renderContent($context, $taxObject = ''){

        if(!is_admin()){
            if (!empty($context['data'])){
//                if (class_exists('IncludeComponentsFile')){
//                    IncludeComponentsFile::includeFile();
//                }

                foreach ($context['data'] as $key => $item) {
                    if ($item['type'] === 'flexible_content'){
                        if( have_rows($item['name'], $taxObject) ):
                            foreach ($item['value'] as $component) {
                                $context['data'] = $component;
                                $functionName = $component['acf_fc_layout'];
                                if(function_exists($functionName)){
                                    $context['data']['response'] = $component['acf_fc_layout']();
                                }
                                $this->ViewContent($context,$component);
                            }
                        endif;
                    }

                }
            }else{
                return;
            }
        }
    }
//    get twig layout with $context
    private function ViewContent($context,$component){

        Timber::render('modules/'. $component['acf_fc_layout'].'/'. $component['acf_fc_layout'] . '.twig', $context);
    }
    private function ViewFooter($context = array()){
        Timber::render('views/partials/footer.twig', $context);
    }
    public function renderPage($context = false){
        $taxObject = '';
        if (isset($context['terms'])){
            $object = $context['terms'];
            $taxObject = $object->taxonomy.'_'.$object->term_id;
        }
        if (isset($context['tags'])){
            $object = $context['tags'];
            $taxObject = $object->taxonomy.'_'.$object->term_id;
        }
        if ($context){
            $context['info'] = $context;
        }

        $context['data'] = $this->getDataObjec($taxObject);
        $this->ViewHeader();
        $this->renderContent($context,$taxObject);
        $this->ViewFooter();
    }
}