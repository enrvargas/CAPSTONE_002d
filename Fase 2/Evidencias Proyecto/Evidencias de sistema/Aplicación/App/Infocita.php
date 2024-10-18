<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Infocita
 *
 * @property $id
 * @property $nombre
 * @property $problema
 * @property $direccion
 * @property $comuna
 * @property $telefono
 * @property $fecha_cita
 * @property $evidencias
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Infocita extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'problema' => 'required',
		'direccion' => 'required',
		'comuna' => 'required',
		'telefono' => 'required',
		'fecha_cita' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','problema','direccion','comuna','telefono','fecha_cita','evidencias'];



}
