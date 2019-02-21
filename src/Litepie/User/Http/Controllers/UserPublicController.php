<?php

namespace Litepie\User\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use App\User;
use Litepie\User\Interfaces\UserRepositoryInterface;
use App\Http\Middleware\verifyExpiry;
/**
 * Resource controller class for user.
 */
class UserPublicController extends BaseController
{


    /**
     * Initialize user resource controller.
     *
     * @param type UserRepositoryInterface $user
     *
     * @return null
     */
    public function __construct(
        UserRepositoryInterface       $user
    ) {
      parent::__construct();
      
      $this->middleware('verify.expiry');
      $this->repository = $user;
    }


    /**
     * Display user.
     *
     * @param Request $request
     * @param Model   $user
     *
     * @return Response
     */
    public function profile(User $user)
    {
//      dd($user);
        //return view('user.profile', compact('user'));
        return $this->response->setMetaTitle(trans('app.view').' '.trans('user::user.name'))
            ->data(compact('user'))
            ->view('user.profile')
            ->output();
    }
}
