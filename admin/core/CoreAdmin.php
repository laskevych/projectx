<?php

class CoreAdmin
{
    public $view = '';
    public function __construct()
    {

        $path_twig = '../lib/Twig/Autoloader.php';
        $path_twig_loader = '../admin/theme/html';
        require_once $path_twig;
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem($path_twig_loader);
        $twig = new Twig_Environment($loader, array(
            'cache'       => 'cache',
            'auto_reload' => true
        ));

        $twig->addFunction('viewTreeRadio', new Twig_Function_Function('viewTreeRadio'));

        function viewTreeRadio($categories)
        {
            if ($categories)
            {
                echo "<ul class='list-group'>";
                foreach ($categories as $category)
                {
                    echo "<li class='list-group-item'><label class=\"custom-control custom-radio\"><input class=\"custom-control-input\" type=\"radio\" name=\"parent_id\" value=".$category['id']." autocomplete=\"off\"><span class=\"custom-control-indicator\"></span><span class=\"custom-control-description\">".$category['name']."</span></label></li>";
                    if (isset($category['subcategories']))
                    {
                        viewTreeRadio($category['subcategories']);
                    }
                }
                echo "</ul>";
            }
        }
        $twig->addFunction('viewTreeList', new Twig_Function_Function('viewTreeList'));

        function viewTreeList($categories)
        {
            if ($categories)
            {
                echo "<ol>";
                foreach ($categories as $category) {
                    echo "<li>" . $category['name'] . "</li>";
                    if (isset($category['subcategories'])) {
                        viewTreeList($category['subcategories']);
                    }
                }
                echo "</ol>";
            }
        }

        $this->view = $twig;
    }
    static public function translit($text)
    {
        $ru = explode('-', "А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я");
        $en = explode('-', "A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch---Y-y---E-e-YU-yu-YA-ya");
        $res = str_replace($ru, $en, $text);
        $res = preg_replace("/[\s]+/ui", '-', $res);
        $res = preg_replace('/[^\p{L}\p{Nd}\d-]/ui', '', $res);
        $res = strtolower($res);
        return $res;
    }

    static public function makeTree($categories, $parent_id = 0)
    {
        $results = array();
        foreach ($categories as $key => $category)
        {
            if ($category['parent_id'] == $parent_id)
            {
                if ($category['id'] != $parent_id)
                {
                    $subcategories = self::makeTree($categories, $category['id']);
                    if (!empty($subcategories))
                    {
                        $category['subcategories'] = $subcategories;
                    }
                    $results[]=$category;
                    unset($category);
                }
            }
        }
        return $results;
    }
}
