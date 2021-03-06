<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [
        'mapel', 'kelas', 'nama_exercise', 'deskripsi', 'file', 'bataswaktu', 'user_id_teacher',
    ];

    /*
    * This is For CRUD
    *
    */
    protected $table = 'exercise';

    /**
     * Exercise & Question Relationship
     * Exercise Has Many Question
     *
     */

    public function jawabanexercise(){
        return $this->hasMany(JawabanTugas::class);
    }
}
