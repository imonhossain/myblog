<?php

namespace Myblog\Http\Controllers\Backend\Access\User;

use Myblog\Models\Access\User\User;
use Myblog\Http\Controllers\Controller;
use Myblog\Http\Requests\Backend\Access\User\ManageUserRequest;
use Myblog\Repositories\Backend\Access\User\UserSessionRepository;

/**
 * Class UserSessionController.
 */
class UserSessionController extends Controller
{
    /**
     * @param User                  $user
     * @param ManageUserRequest     $request
     * @param UserSessionRepository $userSessionRepository
     *
     * @return mixed
     */
    public function clearSession(User $user, ManageUserRequest $request, UserSessionRepository $userSessionRepository)
    {
        $userSessionRepository->clearSession($user);

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.session_cleared'));
    }
}
