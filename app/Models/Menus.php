<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Auth;

class Menus extends Model {
    use HasFactory;

    protected $table = 'menu';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'menu_id',
        'name',
        'icon',
        'route',
        'active',
        'order',
        'target',
        'type',
        'permission',
        'site',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function submenu () {
        return $this->hasMany('App\Models\Menus', 'menu_id', 'id')->permission()->active();
    }

    public function scopeSite (EloquentBuilder $query, string $site = 'blog') {
        return $query->where('site', "{$site}")->orderBy('order', 'asc');
    }

    public function scopeActive (EloquentBuilder $query) {
        return $query->where('active', 1)
        ->whereNull('deleted_at');
    }

    public function scopePermission (EloquentBuilder $query) {
        if (Auth::guard('web')->check()) {
            return $query->where(function (EloquentBuilder $where) {
                $where->where('permission', 'like', '%all%')
                ->orWhere('permission', 'like', "%".auth('web')->user()->kind."%");
            });
        } else {
            return $query->where('permission', 'like', '%all%');
        }
    }

    public function scopeHierarchy (EloquentBuilder $query, int $id = 0) {
        return $query->where('menu_id', $id);
    }

    public function scopeBlog (EloquentBuilder $query) {
        return $query->site('blog')->active()->permission()->hierarchy(0);
    }

    public function scopeDashboard (EloquentBuilder $query) {
        return $query->site('dashboard')->active()->permission()->hierarchy(0);
    }
}
