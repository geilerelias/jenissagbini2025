<p>Has recibido un nuevo mensaje desde el formulario de contacto.</p>

<p><strong>Nombre:</strong> {{ $contact['firstName'] }} {{ $contact['lastName'] }}</p>
<p><strong>Correo:</strong> {{ $contact['email'] }}</p>
<p><strong>Asunto:</strong> {{ $contact['subject'] }}</p>
<p><strong>Mensaje:</strong></p>
<p>{!! nl2br(e($contact['message'])) !!}</p>