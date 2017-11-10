<?php
class Error404 extends Core
{
    public function fetch()
    {
        $uri = parse_url($_SERVER['REQUEST_URI']);
        $url = explode('/',$uri['path']);
        $pages = new Pages();
        if ($url[1])
        {
            $page = $pages->getPagesView($url[1]);
            if (empty($page))
            {
                $arr = array(
                    'errors' => 404,
                );

                return $this->view->render('404.html', $arr);
            }
            else
            {
                $arr = array(
                    'page' => $page,
                );

                return $this->view->render('pages.html', $arr);
            }
        }
        $arr = array(
            'errors' => 404,
        );

        return $this->view->render('404.html', $arr);
    }
}