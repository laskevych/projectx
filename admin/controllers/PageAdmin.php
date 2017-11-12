<?php
class PageAdmin extends CoreAdmin
{
    public function fetch()
    {
        $pages = new Pages();
        $request = new Request();
        $page = new stdClass();

        $uri = parse_url($_SERVER['REQUEST_URI']);

        if ($uri['query'])
        {
            $id = explode('=',$uri['query']);
            $page = $pages->getPage($id[1]);
        }
        if ($request->method() == 'POST' && $_POST['title'] != null)
        {
            $page->title = $request->post('title');
            $page->description = $request->post('description');
            $page->visible = $request->post('visible', 'integer');
            if (empty($request->post('url')))
            {
                $page->url = parent::translit($request->post('title'));
            }
            else
            {
                $page->url = $request->post('url');
            }
            if ($request->post('id', 'integer'))
            {
                //Обновление страницы
                $id = $pages->updatePage($request->post('id', 'integer'), $page);
            }
            else
            {
                //Добавление страницы
                $id = $pages->addpage($page);
            }
            $page = $pages->getpage($id);
            //print_r($page);
        }

        $arr = array(
            'page' => $page,
        );
        /*echo "<pre>";
        print_r($arr);
        echo "</pre>";*/
        return $this->view->render('admin_page.html', $arr);
    }
}