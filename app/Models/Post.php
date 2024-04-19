<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [];

    
   protected $fillable = [
       'title',
       'contenu',
       'description',
       'user_id',
       'image'
   ];

   public function author(): BelongsTo
   {
       return $this->belongsTo(User::class,'user_id');
   }

   public function categorie(): BelongsToMany
   {
       return $this->belongsToMany(Category::class);
   }

}
