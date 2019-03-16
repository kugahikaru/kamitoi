<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificateImage extends Model
{
    protected $table = 'images';
    protected $fillable = ['file_path'];
}
