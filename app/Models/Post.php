<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // fillable agar bisa Mass Assignment, biar bisa di isi banyak sekaligus menggunakan create
    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body',
    // ];

    // guarded agar bisa disi secara mass assignment akan tetapi adalah data yang tidak boleh diisi(pengecualian)
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
