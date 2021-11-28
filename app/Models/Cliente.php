<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class Cliente extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'clientes';

    /* ********************************************** ATTRIBUTES *************************************************** */
    protected $fillable = [
        'nome',
        'telefone',
        'cpf',
        'placa'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /* ************************************************ ACTIONS **************************************************** */
    public static function create(array $attributes = [])
    {
        return static::query()->create($attributes);

    }

    public static function searchPlaca(string $placa)
    {
        return DB::table('clientes')
            ->where('placa', 'like', '%' . $placa )
            ->get();
    }
}
