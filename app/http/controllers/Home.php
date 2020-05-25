<?php

namespace Lamantin\App\http\controllers;

use Lamantin\App\Core\View;

/**
 * Class Home
 * @package Lamantin\App\http\controllers
 * @author Jolydev <superduperproger@gmail.com>
 */
class Home
{
    /**
     * @throws \Exception
     * @return void
     */
    public function homePage(): void
    {
        $model = new \Lamantin\App\models\home();
        if ($model->auth() === true) {
            view::render('home', [
                'data' => $model->get($_COOKIE['t'])[0]
            ]);
        } else {
            header('Location: /');
        }
    }
}