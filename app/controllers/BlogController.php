<?php

class BlogController extends BaseController {
	public function index() {
			$posts = Blog::all();
			$site_title = 'Blog';

			return View::make('blog.index', compact('site_title', 'posts'));
		}
}