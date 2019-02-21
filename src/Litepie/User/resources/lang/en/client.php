<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for :client in user package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  :client module in user package
    | and it is used by the template/view files in this module
    |
     */

    /*
     * Singlular and plural name of the module
     */
    'name'        => 'Cliente',
    'names'       => 'Clientes',

    /*
     * Singlular and plural name of the module
     */
    'title'       => [
        'main'   => 'Clientes',
        'sub'    => 'Clientes',
        'list'   => 'Lista de clientes',
        'edit'   => 'Editar cliente',
        'create' => 'Criar novo cliente',
    ],

    /*
     * Options for select/radio/check.
     */
    'options'     => [
        'sex'    => ['masculino'=>'Masculino', 'feminino'=>'Feminino'],
        'status' => ['Novo', 'Ativo', 'Suspenso', 'Expirado'],
        'personType' =>  ['fisica'=>'Física', 'juridica'=>'Jurídica'],
'state' =>  array(
  'AC' => "Acre",
  "AL" => "Alagoas",
  "AP" => "Amapá",
  "AM" => "Amazonas",
  "BA" => "Bahia",
  "CE" => "Ceará",
  "DF" => "Distrito Federal",
  "ES" => "Espírito Santo",
  "GO" => "Goiás",
  "MA" => "Maranhão",
  "MT" => "Mato Grosso",
  "MS" => "Mato Grosso do Sul",
  "MG" => "Minas Gerais",
  "PA" => "Pará",
  "PB" => "Paraíba",
  "PR" => "Paraná",
  "PE" => "Pernambuco",
  "PI" => "Piauí",
  "RJ" => "Rio de Janeiro",
  "RN" => "Rio Grande do Norte",
  "RS" => "Rio Grande do Sul",
  "RO" => "Rondônia",
  "RR" => "Roraima",
  "SC" => "Santa Catarina",
  "SP" => "São Paulo",
  "SE" => "Sergipe",
  "TO" => "Tocantins"
),

    ],

    /*
     * Placeholder for inputs
     */
    'placeholder' => [
        'id'             => 'Código',
        'firstName'           => 'Nome',
        'lastName'           => 'Sobrenome',
        'personType'           => 'Tipo de pessoa',
        'email'          => 'E-Mail',
        'password'       => 'Senha',
        'api_token'      => 'api token',
        'remember_token' => 'remember token',
        'sex'            => 'Sexo',
        'dob'            => 'Data de nascimento',
        'company'            => 'Nome Fantasia',
        'cpf'            => 'CPF',
        'cnpj'            => 'CNPJ',
        'expiry'            => 'Dias para expirar o login',
        'mobile'         => 'Celular',
        'phone'          => 'Telefone',
        'billingAddress1' => 'Endereço',
        'billingAddress2' => 'Complemento',
        'city'           => 'Cidade',
        'postcode'       => 'CEP',
        'state'          => 'estado',
        'country'        => 'pais',
        'photo'          => 'photo',
        'web'            => 'site',
        'status'         => 'Por favor selecione um status',
        'upload_folder'  => 'upload folder',
        'deleted_at'     => 'Please select deleted at',
        'created_at'     => 'Please select created at',
        'updated_at'     => 'Please select updated at',
    ],

    /*
     * Labels for inputs.
     */
    'label'       => [
        'id'             => 'Id',
        'firstName'           => 'Nome',
        'lastName'           => 'Sobrenome',
        'personType'           => 'Tipo de pessoa',
        'email'          => 'Email',
        'password'       => 'Senha',
        'api_token'      => 'Api token',
        'remember_token' => 'Remember token',
        'sex'            => 'Sexo',
        'cpf'            => 'CPF',
        'cnpj'            => 'CNPJ',
        'company'            => 'Nome Fantasia',
        'expiry'            => 'Expiração do login',
        'dob'            => 'Nascimento',
        'mobile'         => 'Celular',
        'phone'          => 'Telefone',
        'billingAddress1' => 'Endereço',
        'billingAddress2' => 'Complemento',
        'city'           => 'Cidade',
        'postcode'       => 'CEP',
        'state'          => 'Estado',
        'country'        => 'Pais',
        'photo'          => 'Perfil',
        'web'            => 'Site',
        'status'         => 'Status',
        'upload_folder'  => 'Upload folder',
        'deleted_at'     => 'Deleted at',
        'created_at'     => 'Created at',
        'updated_at'     => 'Updated at',
    ],

    /*
     * Columns array for show hide checkbox.
     */
    'cloumns'     => false,

    /*
     * Tab labels
     */
    'tab'         => [
        'name' => 'Clientes',
    ],

    /*
     * Texts  for the module
     */
    'text'        => [
        'preview' => 'Cadastre e remova os clientes',
    ],
];
