<?php

namespace Litepie\User\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use App\User;
use Litecms\Product\Interfaces\OrderRepositoryInterface;
use Litepie\User\Interfaces\UserRepositoryInterface;
use App\Http\Middleware\verifyExpiry;
use Illuminate\Support\Facades\Auth;
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
        UserRepositoryInterface       $user,
        OrderRepositoryInterface       $orderRepository
    ) {
      parent::__construct();
      $this->setTheme('client');
      $this->middleware('auth');
      $this->middleware('verify.expiry');
      $this->repository = $user;
      $this->orderRepository = $orderRepository;
  
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
        return $this->response->setMetaTitle('Perfil')
            ->data(compact('user'))
            ->view('user.profile')
            ->output();
    }
    
    /*
     * Display Orders
     */
    public function orders() {
      $user = Auth::user();
      $orders = $this->orderRepository
        ->pushCriteria( app( 'Litepie\Repository\Criteria\RequestCriteria' ) )
        ->scopeQuery( function ( $query ) use ( $user ) {
          return $query->where('client_id',$user->id)->orderBy( 'created_at', 'DESC' );
        } )->paginate();
  
  
      return $this->response->setMetaTitle( 'Pedidos')
                            ->data( compact( 'orders' ) )
                            ->view('user.pedidos')
                            ->output();
    }
}
