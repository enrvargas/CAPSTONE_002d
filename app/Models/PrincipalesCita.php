<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PrincipalesCita
 *
 * @property $id
 * @property $nombre
 * @property $problema
 * @property $direccion
 * @property $comuna
 * @property $telefono
 * @property $fecha_cita
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PrincipalesCita extends Model
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
    protected $fillable = ['nombre','problema','direccion','comuna','telefono','fecha_cita'];



}
