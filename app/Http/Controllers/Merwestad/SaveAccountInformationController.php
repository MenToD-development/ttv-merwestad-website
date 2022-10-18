<?php

namespace App\Http\Controllers\Merwestad;

use App\Actions\SaveAccountInformationAction;
use App\DataTransferObjects\UpdateAccountData;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAccountInformationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class SaveAccountInformationController extends Controller
{
    public function __invoke(
        UpdateAccountInformationRequest $request,
    ): RedirectResponse {
        (new SaveAccountInformationAction)->execute(
            Auth::user(),
            UpdateAccountData::fromRequest($request),
        );

        return redirect()
            ->route('my-merwestad.my-account');
    }
}
