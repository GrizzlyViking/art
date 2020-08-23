<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Collection
     */
    private $payload;

    /**
     * Create a new message instance.
     *
     * @param array $payload
     */
    public function __construct(array $payload)
    {
        $this->payload = collect($payload);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $payload = $this->payload->toArray();
        return $this->view('emails.contact')
            ->to('info@nataliaschlossborg.com')
            ->replyTo($this->payload->get('email'))
            ->with(compact('payload'));
    }
}
