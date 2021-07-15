<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\GenerateSlug;
use App\Services\SPCService;

class Departament //extends Model
{
    protected $service;
    //protected $table = 'attribute_modules';
    //protected $hidden = [ 'id' ];
    //protected $fillable = [
    //    'name',
    //    'code',
    //];

    //protected $dispatchesEvents = [
    //    'creating' => GenerateSlug::class,
    //];
    //
    public function __construct()
    {
        $this->service = new SPCService();
    }

    /**
     * Departaments from SPC
     * @throws Exception if empty or error service
     * @return Collection data
     */
    public static function all()
    {
        $departaments = $this->service->getDepartments();

        if ($departaments['code'] >= 400) {
            throw new \Exception('Model error');
        }

        dd($departaments);
        return collect($departaments['data']);
    }
}

