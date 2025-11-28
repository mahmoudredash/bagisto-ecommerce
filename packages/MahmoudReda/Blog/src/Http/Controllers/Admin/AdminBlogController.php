<?php

namespace MahmoudReda\Blog\Http\Controllers\Admin;

use Webkul\Admin\Http\Controllers\Controller;

class AdminBlogController extends Controller {
    public function index()
    {
        return view('blog_admin::index');
    }
}
