<?php

namespace App\Notifications;
use App\Mail\ResetPassword as Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    use Queueable;

    public $token;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        //
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    /*public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Сброс пароля')
                    ->line('The introduction to the notification.')
                    ->action('Notification Action',url( url('/').route('password.reset', [$this->token, encrypt($notifiable->email)], false)))
                    ->line('Thank you for using our application!');
    }
*/

    public function toMail($notifiable)

{

$subject = 'Восстановление пароля';

return (new Mailable($this->token, $notifiable))->subject($subject)->to($notifiable->email);

}
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
