<?php

namespace App\Http\View\Composers;

use App\Model\Admin\Banner;
use App\Model\Admin\Category;
use App\Model\Admin\PostCategory;
use App\Model\Admin\Service;
use App\Model\Admin\ServiceType;
use Illuminate\View\View;

class MenuHomePageComposer
{
    /**
     * Compose Settings Menu
     * @param View $view
     */
    public function compose(View $view)
    {
        $productCategories = Category::query()->with([
                'childs' => function($query) {
                    $query->with(['childs']);
                }
            ])
            ->where(['type' => 1, 'parent_id' => 0])
            ->orderBy('sort_order')
            ->get();

        $listServiceType = ServiceType::query()->where('status', 1)->get();
        $listService = Service::query()->where('status', 1)->get();
        $postCategories = PostCategory::query()->where(['parent_id' => 0, 'show_home_page' => 1])->latest()->get();

        $view->with(['productCategories' => $productCategories, 'postCategories' => $postCategories, 'listService' => $listService, 'listServiceType' => $listServiceType]);
    }
}
