<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Twitter\TwitterChannel;
use NotificationChannels\Twitter\TwitterStatusUpdate;


use App\catastrofe;
class PostPublished extends Notification
{
    public function via($notifiable)
    {
        return [TwitterChannel::class];
    }
 
    
    public function toTwitter($catastrofe) {
    return new TwitterStatusUpdate('Nuevo '$catastrofe->tipos_catastrofe->nombre 'En la comuna '$catastrofe->locacion->comuna->nombre ' ' $catastrofe->descripcion);
}
}

