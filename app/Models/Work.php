<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'file_path',
        'category',
        'title',
    ];

    // قائمة التصنيفات لسهولة استدعائها في الفورم والفلترة
    public static array $categories = [
        'تنسيق الزهور',
        'المناسبات',
        'حفلات الزفاف',
        'الهدايا',
    ];
}
