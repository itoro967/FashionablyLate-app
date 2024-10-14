<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'tell',
        'address',
        'building',
        'detail',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function scopeSearchWord($query, $word)
    {
        if (!empty($word)) {
            // フルネーム(空白有)検索を考慮
            $words = preg_split("/[\s]+/", mb_convert_kana($word, "s"));
            if (count($words) == 1) {
                $query->whereAny(['first_name', 'last_name', 'email'], 'like', '%' . $words[0] . '%');
            }
            if (count($words) == 2) {
                $query->where('last_name', 'like', '%' . $words[0] . '%')
                    ->Where('first_name', 'like', '%' . $words[1] . '%');
            }
        }
    }
    public function scopeSearchGender($query, $gender)
    {
        if (!empty($gender)) {
            $query->where('gender', $gender);
        }
    }
    public function scopeSearchType($query, $type)
    {
        if (!empty($type)) {
            $query->where('category_id', $type);
        }
    }
    public function scopeSearchDate($query, $date)
    {
        if (!empty($date)) {
            $query->where('created_at', 'like', $date . "%");
        }
    }
}
