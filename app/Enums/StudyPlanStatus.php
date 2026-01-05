<?php

namespace App\Enums;

enum StudyPlanStatus: string
{
    case PENDING = 'Pending';
    case APPROVED = 'Approve';
    case REJCT = 'Reject';



    public function options(): array
    {
        return collect(self::cases())->map(fn($item) => [
            'value' => $item->value,
            'laebel' => $item->label,
        ])->values()->toArray();
    }
}
