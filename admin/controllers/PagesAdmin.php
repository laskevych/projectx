<?php

class PagesAdmin extends CoreAdmin
{
    public function fetch()
    {

        $pages = new Pages();
        $pages_catalog = $pages->getPages($visible = 'all');
        $request = new Request();
        if ($request->method() == 'POST' && $_POST['delete'])
        {
            $id = $request->post('id');
            $pages->deletePage($id);
        }
        $arr = array(
            'pages' => $pages_catalog,
        );
        return $this->view->render('admin_pages.html', $arr);
    }
}