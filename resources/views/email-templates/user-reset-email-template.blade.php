<p>Hola: <b>{{ $user->email }}</b></p>
<br>
<p>
    Su password en el sistema de YNAB se cambio correctamente. Aqui sus nuevas credenciales de inicio de sesión:
    <br><br>
    <b>Login ID: </b> {{ $user->email }}
    <br>
    <b>Password: </b>{{ $new_password }}
</p>
<br><br>
Por favor, mantenga la confidencialidad de sus credenciales. Su nombre de usuario y password son sus propias
credenciales y nunca debe compartirlas con nadie mas.
<p>
    YNAB no sera responsable del mal uso de su nombre de usuario o password.
</p>
<br>
----------------------------------------------------------------------------
<p>
    Este correo electrónico fue enviado automáticamente por el sistema de YNAB. No respondas.
</p>
