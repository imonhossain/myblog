<?php

namespace Myblog\Http\Controllers\Backend\Access\User;

use Myblog\Models\Access\User\User;
use Myblog\Http\Controllers\Controller;
use Myblog\Notifications\Frontend\Auth\UserNeedsConfirmation;
use Myblog\Http\Requests\Backend\Access\User\ManageUserRequest;

/**
 * Class UserConfirmationController.
 */
class UserConfirmationController extends Controller
{
    /**
     * @param User              $user
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function sendConfirmationEmail(User $user, ManageUserRequest $request)
    {
        $user->notify(new UserNeedsConfirmation($user->confirmation_code));

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.confirmation_email'));
    }
}
