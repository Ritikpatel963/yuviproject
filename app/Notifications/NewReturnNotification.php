<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewReturnNotification extends Notification
{
    use Queueable;

    private $return;

    /**
     * Create a new notification instance.
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'New Return Request',
            'message' => 'A return has been requested for Order #' . $this->return->order->order_number . '.',
            'return_id' => $this->return->id,
            'action_url' => route('admin.ecommerce.order-returns.show', $this->return->id),
        ];
    }
}
