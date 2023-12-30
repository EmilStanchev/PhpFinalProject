<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class Post extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'user_id',
        'slug',
        'image',
        'description',
        'created_at',
        'featured',
    ];
    protected $casts=[
        'created_at'=>'datetime',
    ];
    public function author()
    {
        return $this->belongsTo(Author::class,'user_id');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function scopeFeatured($query)
    {
        $query->where('featured',true);
    }
    public function getReadingTime()
    {
        $mins= round(str_word_count($this->description) / 220);
        return ($mins<1)? 1 : $mins;
    }
    public function getResume()
    {
        return Str::limit(strip_tags($this->description),150);
    }
    public function getPostImage()
    {
        $isUrl = str_contains($this->image,'http');
        return $isUrl? $this->image : Storage::disk('public')->url($this->image);
    }
    public function scopeWithCategory($query,string $category)
    {
         $query->orWhereHas('categories',function ($query) use($category){
            $query->where('slug', $category);
        });
    }
}
