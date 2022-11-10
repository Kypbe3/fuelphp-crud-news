<?php
use Model\News;
use Fuel\Core\Router;

class Controller_Frontend extends Controller
{
    public function get_index()
    {
        $data['news'] = News::query()
            ->order_by('id','DESC')
            ->limit(3)
            ->get();

        return Response::forge(View::forge('frontend/index',$data));
    }

    public function get_news()
    {
        $page = (integer)Request::active()->param('page', 1);

        $pagination = Pagination::forge('newsPagination', [
            'pagination_url' => Router::get('frontend.news'),
            'total_items'    => News::count(),
            'per_page'       => 3,
            'page' => $page,
            'uri_segment' => 2,
        ]);

        $news = News::query()
            ->rows_offset($pagination->offset)
            ->rows_limit($pagination->per_page)
            ->get();

        $data['news'] = $news;
        $data['pagination'] = $pagination;

        return Response::forge(View::forge('frontend/news',$data));
    }
}