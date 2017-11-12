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

        $twig->addFunction('viewTree', new Twig_Function_Function('viewTree'));
        function viewTree($categories)
        {
            if ($categories)
            {
                echo "<ol>";
                foreach ($categories as $category)
                {
                    echo "<li>".$category['name']."</li>";
                    if (isset($category['subcategories']))
                    {
                        viewTree($category['subcategories']);
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

    static public function viewTree($categories)
    {
        if ($categories)
        {
            echo "<ol>";
            foreach ($categories as $category)
            {
                echo "<label class=\"btn btn-primary\"><input type=\"radio\"><li>".$category['name']."</li></label>";
                if (isset($category['subcategories']))
                {
                    //viewTree($category['subcategories']);
                }
            }
            echo "</ol>";
        }
    }
}
