<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderScript extends Model
{
    use HasFactory;

    /**
     * الحقول المسموح بإدخال البيانات فيها
     */
    protected $fillable = [
        'name',
        'code',
        'is_active',
    ];

    /**
     * تحويل نوع البيانات تلقائياً
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
