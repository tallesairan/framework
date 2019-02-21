<?php

namespace Litepie\User\Repositories\Presenter;

use League\Fractal\TransformerAbstract;

class ClientTransformer extends TransformerAbstract
{
    public function transform(\Litepie\User\Models\Client $client)
    {
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
            'cpfcnpj'           => $client->cpfcnpj,
            'expiry'           => $client->expiry,
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
            'created_at'        => format_date($client->created_at),
            'updated_at'        => format_date($client->updated_at),
            'password_changed_at'        => format_date($client->password_changed_at),
        ];
    }
}
