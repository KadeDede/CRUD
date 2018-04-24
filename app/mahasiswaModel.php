<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswaModel extends Model
{
	protected $table = 'mahasiswa';
    protected $fillable = ['nimMhs', 'namaMhs', 'noTelpMhs','fakultasMhs'];

}

