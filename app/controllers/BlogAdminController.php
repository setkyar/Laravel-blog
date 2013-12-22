<?php 

	class BlogAdminController extends BaseController {
		public function index() {
			$lists = Blog::all();
			$site_title = 'Admin Dashboard';

			return View::make('admin.index', compact('site_title', 'lists'));
		}

		public function create() {
			//Make Create Process Here
				$site_title = 'Create Blog Post';
				$blog = new Blog();
				if (is_post())
					{
						$blog->title =Input::get('title');
						$blog->content =Input::get('content');
						$blog->user_id = Auth::user()->id;
						$blog->save();
						return Redirect::to('/admin/dashboard');
					}

				return View::make('admin.form',compact('site_title', 'blog'));
			}	

		public function edit($id) {
			//Make Edit Procrss Here
			$site_title = 'Edit Blog Post';

			$blog = Blog::find($id);
			if (is_post())
					{
						$blog->title =Input::get('title');
						$blog->content =Input::get('content');
						$blog->user_id = Auth::user()->id;
						$blog->save();
						return Redirect::to('/admin/dashboard');
					}
			return View::make('admin.form',compact('site_title', 'blog'));
		}

		Public function delete($id) {
			//Make Delete Process Here
			$blog = Blog::find($id);

			if(! is_null($blog))
			{
				$blog->delete();
			}

			return Redirect::to('admin/dashboard');
		}
}