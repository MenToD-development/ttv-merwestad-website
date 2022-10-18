<?php

namespace App\DataTransferObjects;

use App\Http\Requests\UpdateAccountInformationRequest;
use App\Values\Password;

class UpdateAccountData
{
    public function __construct(
        public readonly string $email,
        public readonly Password $password,
    ) {
    }

    public static function fromRequest(
        UpdateAccountInformationRequest $request,
    ): self {
        return new self(
            $request->get('email'),
            new Password($request->get('password')),
        );
    }
}
