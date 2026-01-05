<?php

namespace App\Enums;

enum FeeStatus: string
{
    case PENDING = 'Tertunda';
    case SUCCESS = 'Sukses';
    case FAILED = 'Gagal';

    public function options(): array
    {
        return collect(self::cases())->map(fn($item) => [
            'value' => $item->value,
            'laebel' => $item->label,
        ])->values()->toArray();
    }
}
