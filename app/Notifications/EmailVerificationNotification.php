<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class EmailVerificationNotification extends Notification
{
    /**
     * Get the reset password notification mail message for the given URL.
     *
     * @param  string  $url
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject(Lang::get('VÉRIFIER L\'ADRESSE E-MAIL'))
                    ->line(Lang::get('Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.'))
                    ->action(Lang::get('Vérifier l\'adresse e-mail'), $this->verificationUrl($notifiable))
                    ->line(Lang::get('Si vous n\'avez pas créé de compte, aucune autre action n\'est nécessaire.'));
        
    }
}