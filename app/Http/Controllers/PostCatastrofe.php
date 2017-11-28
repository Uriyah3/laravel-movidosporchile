<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Twitter\TwitterChannel;
use NotificationChannels\Twitter\TwitterStatusUpdate;

use lluminate\Notifications\Notifiable;
use App\Catastrofe;

class PostCatastrofe extends Notification
{
   
  public function via($notifiable)
    {
        return [TwitterChannel::class];
    }
 
    
    public function toTwitter( $catastrofe) {
    return new TwitterStatusUpdate($catastrofe->tipo_catastrofe->nombre . ' nueva catastrofe en comuna ' . $catastrofe->locacion->comuna->nombre . ' en la región ' . $catastrofe->locacion->comuna->provincia->region->nombre . ' ' . url()->current());
    }

}
