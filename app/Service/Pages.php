<?php namespace App\Service;

use App\Model\Page;
use Illuminate\Support\Collection;

/**
 * Class Pages
 * @package App\Service
 */
class Pages
{
    /**
     * @var Page[]|\Illuminate\Database\Eloquent\Collection
     */
    protected $pages;

    public function __construct()
    {
        /** @var Collection pages */
        $this->pages = Page::all();
    }

    public function all()
    {
        return $this->pages;
    }

    public function except(...$except)
    {
        return $this->pages->reject(function (Page $page) use($except) { return in_array($page->slug, $except); });
    }
}
