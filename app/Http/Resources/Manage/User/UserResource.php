<?php

namespace App\Http\Resources\Manage\User;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        /** @var User $this */
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email_verified_at' => $this->email_verified_at,
        ];
    }
}
