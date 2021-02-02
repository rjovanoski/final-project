<?php

namespace App\Notifications;

use App\User;
use App\Recipe;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RecipeUpdateNotification extends Notification
{
    use Queueable;

    private $recipe;
    private $user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Recipe $recipe, User $user)
    {
        $this->recipe = $recipe;
        $this->user = $user;
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
            ->line('Recipe '.$this->recipe->name.' was updated')
            ->line('By user: '.$this->user->name)
            ->line('User email: '.$this->user->email)
            ->action('Login to approve', route('admin.edit',$this->recipe->id));
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
