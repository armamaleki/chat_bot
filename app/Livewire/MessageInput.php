<?php

namespace App\Livewire;

use App\Models\Conversation;
use Livewire\Component;

class MessageInput extends Component
{
    public $message;
    public $userId;

    public function store()
    {
        $validatedData = $this->validate([
            'message' => 'required|string',
        ]);

        $conversation = Conversation::whereHas('users', function ($query) {
            $query->where('users.id', auth()->id());
        })
            ->whereHas('users', function ($query) {
                $query->where('users.id', $this->userId);
            })
            ->first();

        if (!$conversation) {
            $conversation = Conversation::create([
                'type' => 'private',
            ]);

            $conversation->users()->sync([
                auth()->id(),
                $this->userId,
            ]);
        }

        $conversation->messages()->create([
            'user_id' => auth()->id(),
            'body' => $validatedData['message'],
        ]);

        $this->reset('message');
    }

    public function render()
    {
        return view('livewire.message-input');
    }
}
