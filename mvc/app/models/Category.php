<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model{
    protected $table = 'categories';
    protected $fillable = ['cate_name', 'desc', 'show_menu'];
    protected $attributes = [
        'show_menu' => 0,
    ];
}

?>