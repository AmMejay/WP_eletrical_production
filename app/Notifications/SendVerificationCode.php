<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;

class SendVerificationCode extends Notification
{
    use Queueable;

    protected int|string $code;

    public function __construct(int|string $code)
    {
        $this->code = $code;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail(User $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Volt Engenharia - Seu código de verificação')
            ->greeting('Olá, ' . $notifiable->name . '!')
            ->line('Seu código de verificação de acesso é:')
            ->line('**' . $this->code . '**')
            ->line('Insira este código na tela de validação para ativar sua conta.')
            ->line('Se você não solicitou este código, ignore este e-mail.');
    }
}
