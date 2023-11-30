<?php

namespace App\Models;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


enum Status: string implements HasLabel
{
    case Active = 'active';
    case Inactive = 'inactive';
    public function getLabel(): ?string
    {
        return match ($this) {
            Status::Active => 'Active',
            Status::Inactive => 'Inactive',
        };
    }
}


class Test extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => Status::class,
    ];

    protected $fillable = [
        'name',
        'status',

    ];
}
