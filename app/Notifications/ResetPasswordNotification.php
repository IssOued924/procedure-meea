<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class ResetPasswordNotification extends Notification
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
                    ->subject(Lang::get('RÉINITIALISATION DE MOT DE PASSE'))
                    ->line(Lang::get('Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.'))
                    ->action(Lang::get('Réinitialiser le mot de passe'), url(url('/')."/password/reset"."/".$this->token).'?email='.urlencode($notifiable->email))
                    ->line(Lang::get('Ce lien de réinitialisation de mot de passe expirera dans :count minutes.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
                    ->line(Lang::get('Si vous n\'avez pas demandé la réinitialisation de votre mot de passe, aucune action supplémentaire n\'est requise.'));
        
    }
}