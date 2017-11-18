<?php

class SettingsAdmin extends CoreAdmin
{
    public function fetch()
    {
        $arr = array(
            'settings' => 'settings',
        );
        return $this->view->render('admin_settings.html', $arr);
    }
}