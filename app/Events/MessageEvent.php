<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageEvent implements ShouldBroadCast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */

    public $idSender, $idRecipient, $message, $status;

    public function __construct($message)
    {
        //
        $this->idSender = $message["idSender"];
        $this->idRecipient = $message["idRecipient"];
        $this->message = $message["message"];
        $this->status = $message["status"];

    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('chat')
        ];

        // ==== para canais privados
        // return [
        //     new PrivateChannel('chat'),
        // ];
    }
}
