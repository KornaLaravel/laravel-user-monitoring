<?php

namespace Tests\SetUp\Models;

use Binafy\LaravelUserMonitoring\Traits\Actionable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductSoftDelete extends Model
{
    use HasFactory, Actionable, SoftDeletes;

    protected $guarded = [];

    protected $table = 'products';
}
