<?php
class Jurusan extends Eloquent{
    protected $table ='jurusans';
    
    protected $fillable = array(
    'prodi',
    'deskrip',
    'karir'
    );
}

?>