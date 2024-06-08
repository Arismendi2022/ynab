<p>Hola: {{ $user->email }}</p>
<p>
	Hemos recibido una solicitud para cambiar la contraseña asociada con su cuenta YNAB. Puede hacerlo a través del siguiente enlace, que es válido por 30 minutos.
	<br><br>
	<a href="{{$actionLink}}" target="_blank" style="color:#fff;border-color:#22bc66;border-style:solid;border-width: 5px 10px;background-color: #22bc66;
	display:inline-block;text-decoration:none;border-radius:3px;box-shadow: 0 2px 3px rgba(0,0,0,0.16); -webkit-text-size-adjust: none;box-sizing: border-box;">Restablecer
		el password</a>
	<br><br>
	<b>NB:</b> Si no solicitó esto, puede ignorar este correo electrónico con seguridad.
	<br><br>
	Su contraseña no cambiará hasta que acceda al enlace de arriba y cree una nueva.
	<br><br>
	Saludos,
	<br><br>
	El equipo YNAB.
</p>


