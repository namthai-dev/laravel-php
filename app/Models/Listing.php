<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // The naming of the 'scopeFilter' method and calling it using 'filter' matter. 
    // The 'scope' prefix is meaningful to Laravel and the 'Filter' part can be anything, 
    // as long as you use the same name in your Controller when calling the method. In other words, if you name the method scopeTry, 
    // then call it using  ...latest()->try(request(...
    public function scopeFilter($query, array $filters) {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }
    }
}
