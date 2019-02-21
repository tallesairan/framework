            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('firstName')
                       ->autocomplete('off')
                       -> label(trans('user::client.label.firstName'))
                       -> placeholder(trans('user::client.placeholder.firstName'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('lastName')
                       ->autocomplete('off')
                       -> label(trans('user::client.label.lastName'))
                       -> placeholder(trans('user::client.placeholder.lastName'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('personType')
                    ->options(trans('user::client.options.personType'))
                    ->label(trans('user::client.label.personType'))!!}
                </div>

                <div class='col-md-4 col-sm-6 juridica'>
                    <div class='form-group'>
                        <label for='cnpj' class='control-label'>{!!trans('user::client.label.cnpj')!!}</label>
                        {!! Form::text('cnpj')
                        ->autocomplete('off')
                        -> placeholder(trans('user::client.placeholder.cnpj'))
                        ->raw()!!}
                    </div>
                </div>
                <div class='col-md-4 col-sm-6 juridica'>
                    <div class='form-group'>
                        <label for='company' class='control-label'>{!!trans('user::client.label.company')!!}</label>
                        {!! Form::text('company')
                        ->autocomplete('off')
                        -> placeholder(trans('user::client.placeholder.company'))
                        ->raw()!!}
                    </div>
                </div>
                <div class='col-md-4 col-sm-6 fisica' >
                    <div class='form-group'>
                        <label for='cpf' class='control-label'>{!!trans('user::client.label.cpf')!!}</label>
                        {!! Form::text('cpf')
                        ->autocomplete('off')
                        -> placeholder(trans('user::client.placeholder.cpf'))
                        ->raw()!!}
                    </div>
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::email('email')
                       -> label(trans('user::client.label.email'))
                       -> placeholder(trans('user::client.placeholder.email'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::password('password')
                       -> label(trans('user::client.label.password'))
                       -> placeholder(trans('user::client.placeholder.password'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::select('sex')
                   ->options(trans('user::client.options.sex'))
                   ->label(trans('user::client.label.sex'))!!}
                </div>



                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='expiry' class='control-label'>{!!trans('user::client.label.expiry')!!}</label>
                        {!! Form::number('expiry')
                        ->placeholder(trans('user::client.placeholder.expiry'))
                        ->raw()!!}
                   </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                   <div class='form-group'>
                     <label for='dob' class='control-label'>{!!trans('user::client.label.dob')!!}</label>
                     <div class='input-group pickdate'>
                        {!! Form::text('dob')
                        ->autocomplete('off')
                        ->placeholder(trans('user::client.placeholder.dob'))
                        ->raw()!!}
                       <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                     </div>
                   </div>
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::tel('mobile')
                       -> label(trans('user::client.label.mobile'))
                       -> placeholder(trans('user::client.placeholder.mobile'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::tel('phone')
                       -> label(trans('user::client.label.phone'))
                       -> placeholder(trans('user::client.placeholder.phone'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('billingAddress1')
                    ->autocomplete('off')
                    -> label(trans('user::client.label.billingAddress1'))
                    -> placeholder(trans('user::client.placeholder.billingAddress1'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                    {!! Form::textarea ('billingAddress2')
                    ->autocomplete('off')
                    -> label(trans('user::client.label.billingAddress2'))
                    -> placeholder(trans('user::client.placeholder.billingAddress2'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('postcode')
                       ->autocomplete('off')
                       -> label(trans('user::client.label.postcode'))
                       -> placeholder(trans('user::client.placeholder.postcode'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('city')
                       ->autocomplete('off')
                       -> label(trans('user::client.label.city'))
                       -> placeholder(trans('user::client.placeholder.city'))!!}
                </div>


                <div class='col-md-4 col-sm-6'>
                    {!! Form::select('state')
                       ->options(trans('user::client.options.state'))
                       ->label(trans('user::client.label.state'))!!}
                </div>


            </div>

                <script>
                  $(document).ready(function(){
                    $(".fisica,.juridica").hide();

                      $("[name=personType]").on("change", function(){
                        if($(this).val() == "fisica"){
                          $(".fisica").show();
                          $(".juridica").hide();
                        }else if($(this).val() == "juridica"){
                          $(".fisica").hide();
                          $(".juridica").show();
                        }
                      });
                      $("[name=personType]").trigger('change');
                    $('[name=postcode]').mask('00000-000');
                    $('[name=phone]').mask('(00) 0000-0000');
                    $('[name=mobile]').mask('(00) 0000-0000');
                    $('[name=cpf]').mask('000.000.000-00', {reverse: true});
                    $('[name=cnpj]').mask('00.000.000/0000-00', {reverse: true});
                    $('[name=dob]').mask('00/00/0000');
                  });

                </script>
