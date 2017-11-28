<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Twitter\TwitterChannel;
use NotificationChannels\Twitter\TwitterStatusUpdate;

class MedidaPublicada extends Notification
{
    public function via($notifiable)
    {
        return [TwitterChannel::class];
    }
 
    
    public function toTwitter($medida) {
    return new TwitterStatusUpdate(class_basename(get_class($medida)) . ' ' . $medida->medida->objetivos . ' nueva medida de ayuda. ' . url()->current());
    }
}
