<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class UserSinggleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'avatar' => $this->avatar ? Storage::url($this->avatar) : null,
            'roles' => $this->getRoleNames(),
            'role_name' => $this->getRoleNames()->first(),
            'student' => $this->when($this->hasRole('Student'), [
                'id' => $this->studeent?->id,
                'student_number' => $this->studeent?->student_number,
                'batch' => $this->studeent?->batch,
                'semester' => $this->studeent?->semester,
                'faculty' => [
                    'id' => $this->studeent?->faculty?->id,
                    'name' => $this->studeent?->faculty?->name,
                ],
                'departement' => [
                    'id' => $this->studeent?->departement?->id,
                    'name' => $this->studeent?->departement?->name,
                ],
                'classroom' => [
                    'id' => $this->studeent?->classroom?->id,
                    'name' => $this->studeent?->classroom?->name,
                ],
                'feegroup' => [
                    'id' => $this->studeent?->feegroup?->id,
                    'name' => $this->studeent?->feegroup?->group,
                    'amount' => $this->studeent?->feegroup?->amount,
                ],


            ]),
            'teacher' => $this->when($this->hasRole('Teacher'), [
                'id' => $this->teacher?->id,
                'teacher_number' => $this->teacher?->teacher_number,
                'academic_title' => $this->teacher?->academic_title,
                'faculty_id' => $this->teacher?->faculty_id,
                'departement_id' => $this->teacher?->departement_id,

            ]),
            'operator' => $this->when($this->hasRole('Operator'), [
                'id' => $this->operator?->id,
                'employee_number' => $this->operator?->employee_number,
                'position' => $this->operator?->faculty_id,
                'departement_id' => $this->operator?->departement_id,
            ]),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
