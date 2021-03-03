<?php
    namespace App\View\Composers;

    use Illuminate\View\View;
    use App\Models\Menus;

    class MenuBlog {
        protected $menus;

        public function __construct () {
            $this->menus = Menus::blog()->get();
        }

        public function compose (View $view) {
            $view->with('menu', $this->menus);
        }
    }
?>