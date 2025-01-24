<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class FeatureItems extends Model
{
    public function feature() {
        return $this->belongsTo(Feature::class, "feature_id");
    }
}
