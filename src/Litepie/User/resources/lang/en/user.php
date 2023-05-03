<?php

return [

    /*
     * Singlular and plural name of the module
     */
    'name'                  => 'Funcionário',
    'names'                 => 'Funcionários',
    'updated'               => 'Perfil atualizado',
    'user'                  => 'Funcionário',

    /*
     * Options for select/radio/check.
     */
    'options'               => [
        'sex'    => ['masculino', 'feminino'],

        'status'          => ['New'=>'Novo', 'Active'=>'Ativo', 'Suspended'=>'Suspenso'],
        'reporting_to'    => ['1','0'],
        'department'      => ['marketing' => 'Vendas', 'accounts' => 'Pedidos', 'store' => 'Cadastros'],
    ],

    /*
     * Placeholder for inputs
     */
    'placeholder'           => [
        'reporting_to'              => 'Selecionar',
        'email'                     => 'Entre com o endereço de e-mail',
        'name'                      => 'Nome',
        'department'                => 'Departamento',
        'password'                  => 'Digite a senha',
        'password_confirmation'     => 'Digite a senha novamente',
        'current_password'          => 'digite sua senha atual',
        'new_password'              => 'Digite a nova senha',
        'new_password_confirmation' => 'Digite a nova senha novamente',
        'first_name'                => 'Primeiro nome',
        'last_name'                 => 'Sobrenome',
        'sex'                       => 'Sexo',
        'date_of_birth'             => 'Nascimento',
        'photo'                     => 'Foto',
        'mobile'                    => 'Celular',
        'phone'                     => 'Telefone',
        'address'                   => 'E-Mail',
        'street'                    => 'Rua',
        'city'                      => 'Cidade',
        'district'                  => 'Distrito',
        'activated'                 => 'Ativado',
        'type'                      => 'Tipo',
        'dob'                       => 'Nascimento',
        'designation'               => 'Cargo',
        'state'                     => 'Estado',
        'country'                   => 'Pais',
        'web'                       => 'Site',
        'minutes'                   => 'Minutos',
    ],

    /*
     * Labels for inputs.
     */
    'label'                 => [
        'activated'                 => 'Ativo',
        'product'                 => 'Estampas',
        'category'                 => 'Categoria',
        'order'                 => 'Pedido',
        'create'                 => 'Criar',
        'delete'                 => 'Deletar',
        'edit'                 => 'Editar',
        'view'                 => 'Visualizar',
        'address'                   => 'Endereço',
        'city'                      => 'Cidade',
        'country'                   => 'Pais',
        'current_password'          => 'Senha',
        'date_of_birth'             => 'Nascimento',
        'department'                => 'Departamento',
        'designation'               => 'Cargo',
        'designation'               => 'Cargo',
        'district'                  => 'Distrito',
        'dob'                       => 'Nascimento',
        'email'                     => 'E-mail',
        'first_name'                => 'Primeiro nome',
        'last_name'                 => 'Sobrenome',
        'login'                     => 'Login',
        'minutes'                   => 'Duração',
        'mobile'                    => 'Celular',
        'name'                      => 'Nome',
        'new_password'              => 'Nova senha',
        'new_password_confirmation' => 'Confirmar Nova Senha',
        'password'                  => 'Senha',
        'password_confirmation'     => 'Confirmar Senha',
        'phone'                     => 'Telefone',
        'photo'                     => 'Foto',
        'reporting_to'              => 'Login ativo',
        'sex'                       => 'Sexo',
        'state'                     => 'Estado',
        'status'                    => 'Status',
        'street'                    => 'Rua',
        'type'                      => 'Tipo',
        'web'                       => 'Web',
    ],

    /*
     * Tab labels
     */
    'tab'                   => [
        'name' => 'Nome',
    ],

    /*
     * Texts  for the module
     */
    'text'                  => [
        'preview' => 'Clique no funcionário para mais detalhes',
    ],
];
