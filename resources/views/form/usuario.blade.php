
{!! Field::text('nombre',['class' => 'validate[required,custom[onlyLetterAccentSp]]']) !!}
{!! Field::text('escuela',['class' => 'validate[required]']) !!}
{!! Field::email('email',['class' => 'email-field-class validate[required,custom[email],ajax[ajaxValidarEmail]]','ph'=>'Ingrese Correo Electronico']) !!}

{!! Field::password('password',['ph'=>'**********','class'=>'validate[required,minSize[6]]']) !!}
{!! Field::password('confirmar password',['ph'=>'**********','class'=>'validate[equals[password]]','name'=>'password_confirmation','id'=>'confirmar_password']) !!}
{!! Form::button('<span class="fa fa-btn fa-user"></span> Enviar',['class' => 'btn btn-primary','type'=>'submit']) !!}