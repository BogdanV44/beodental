<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Page extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'page_id';
    protected $fillable = ['name', 'route', 'order', 'is_backend_page', 'is_in_main_menu', 'is_active', 'is_deleted', 'fk_parent_page_id', 'has_submenu'];
    public $timestamps = false;

    public function hasSubpages() {
        return $this->attributes['has_submenu'] == 1;
    }

    public function getSubpages() {
        $subpages = Page::where('fk_parent_id', $this->attributes['page_id'])->get();
        $this->attributes['has_subpages'] = 1;
        $this->attributes['subpages'] = $subpages;
        return $this;
    }
}
