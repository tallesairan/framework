<?php

namespace Litepie\User\Repositories\Presenter;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class ClientTransformer extends TransformerAbstract
{
    public function transform(\Litepie\User\Models\Client $client)
    {
    	
	    $expiry              = $client->expiry;
	    $now                 = Carbon::now();
	    $password_changed_at = new Carbon($client->password_changed_at);
	    $diff = $now->diff( $password_changed_at );
	    $expired = 0;
	    if($diff->days > $expiry){
				$expired = 1;
	    }
        return [
            'id'                => $client->getRouteKey(),
            'firstName'              => $client->firstName,
            'lastName'              => $client->lastName,
            'email'             => $client->email,
            'password'          => $client->password,
            'api_token'         => $client->api_token,
            'remember_token'    => $client->remember_token,
            'sex'               => $client->sex,
            'dob'               => $client->dob,
            'cpf'           => $client->cpf,
            'cnpj'           => $client->cnpj,
            'personType'           => $client->personType,
            'company'           => $client->company,
            'expiry'           => $client->expiry,
//            'expired'           => $expired,
            'expired'           => ($expired) ? '<span class="badge badge-danger">Expirado</span>':'<span class="badge badge-success">Liberado</span>',
            'mobile'            => $client->mobile,
            'phone'             => $client->phone,
            'billingAddress1'           => $client->billingAddress1,
            'billingAddress2'            => $client->billingAddress2,
            'postcode'          => $client->postcode,
            'city'              => $client->city,
            'state'             => $client->state,
            'country'           => $client->country,
            'photo'             => $client->photo,
            'web'               => $client->web,
            'status'            => $client->status,
            'upload_folder'     => $client->upload_folder,
            'deleted_at'        => $client->deleted_at,
            'created_at'        => $client->created_at,
            'updated_at'        => $client->updated_at,
            'url'               => [
                'public' => trans_url('user/'.$client->getPublicKey()),
                'user'   => guard_url('user/client/'.$client->getRouteKey()),
            ],
            'status'            => trans('app.'.$client->status),
            'created_at'        => format_date($client->created_at,'d/m/Y'),
            'updated_at'        => format_date($client->updated_at,'d/m/Y'),
            'password_changed_at'        => format_date($client->password_changed_at),
        ];
    }
}
