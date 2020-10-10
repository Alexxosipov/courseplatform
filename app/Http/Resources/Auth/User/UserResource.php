<?php

namespace App\Http\Resources\Auth\User;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Session\TokenMismatchException;

class UserResource extends JsonResource
{
    private string $token;

    public function withAccessToken(string $token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     * @throws TokenMismatchException
     */
    public function toArray($request)
    {
        if (!$this->token) {
            throw new TokenMismatchException();
        }
        /** @var User $this */
        return [
            'user' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'email_verified_at' => $this->email_verified_at,
            ],
            'access_token' => $this->token
        ];
    }
}
