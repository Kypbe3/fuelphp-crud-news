<?php


use Fuel\Core\Router;
use Model\News;

class Controller_NewsBackend extends Controller
{
    public function get_index()
    {
        $page = (integer)Request::active()->param('page', 1);

        $pagination = Pagination::forge('newsPagination', [
            'pagination_url' => Router::get('backend.news'),
            'total_items'    => News::count(),
            'per_page'       => 3,
            'page' => $page,
            'uri_segment' => 3,
        ]);

        $news = News::query()
            ->rows_offset($pagination->offset)
            ->rows_limit($pagination->per_page)
            ->get();

        $data['news'] = $news;
        $data['pagination'] = $pagination;

        return Response::forge(View::forge('backend/news-index',$data));
    }

    public function get_create() {
        return Response::forge(View::forge('backend/news-create'));
    }

    public function post_store() {
        $attributes = Request::active()->input()->all();
        $news = new News();
        foreach ($attributes as $colName => $value) {
            $news->$colName = $value;
        }
        $news->save();

        return Response::redirect(Router::get('backend.news'));
    }

    public function get_edit() {
        $id = (integer)Request::active()->param('id');
        $news = News::find($id);
        if(!$news) {
            return Response::redirect('welcome/404');
        }

        return Response::forge(View::forge('backend/news-edit',['news' => $news]));
    }

    public function post_update() {
        $id = (integer)Request::active()->param('id');
        $news = News::find($id);
        if(!$news) {
            return Response::redirect('welcome/404');
        }

        $attributes = Request::active()->input()->all();
        unset($attributes['id']);

        $news->set($attributes);
        $news->save();

        return Response::redirect(Router::get('backend.news'));
    }

    public function post_destroy() {
        $id = (integer)Request::active()->param('id');
        $news = News::find($id);
        if(!$news) {
            return Response::redirect('welcome/404');
        }

        $news->delete();

        return Response::redirect(Router::get('backend.news'));
    }
}