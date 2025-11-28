<?php

namespace  MahmoudReda\Blog\Widgets;
use Webkul\Admin\Widgets\Widget;
class BlogStats extends  Widget
{
    protected $code = "blog_staus";

    protected  $sort = 1;

    public function getData()
    {
        return  [
            'total_posts' => \DB::table('blog_posts')->count(),
        ];
    }

    public function render()
    {
        return view("blog_admin::widgets.blog-stats")->with($this->getData());
    }
}
