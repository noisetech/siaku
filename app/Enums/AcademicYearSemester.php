<?php

namespace App\Enums;

enum AcademicYearSemester: string
{
    case ODD = 'Ganjil';
    case EVEN = 'Genap';

    public function options(): array
    {
        return collect(self::cases())->map(fn($item) => [
            'value' => $item->value,
            'laebel' => $item->label,
        ])->values()->toArray();
    }
}
