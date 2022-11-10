<?php

use Fuel\Core\Router;

class Controller_Backend extends Controller
{
    public function get_index()
    {
        $data['pages'] = [
            'news' => [
                'url' => Router::get('backend.news'),
                'title' => 'Новости'
            ]
        ];
        return Response::forge(View::forge('backend/index',$data));
    }
}