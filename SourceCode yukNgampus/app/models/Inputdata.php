<?php
class Inputdata extends Eloquent{
    protected $table ='kampusdatas';
    
    protected $fillable = array(
    'namakampus',
    'akronim',
    'wilayah',
    'alamat',
    'website',
    'status',
    'akreditasi',
    'bahasa',
    'kapasitas',
    'fasilitas',
    'biaya',
    'beasiswa',
    'ujianmasuk',
    'fakultas'
    );
}

?>