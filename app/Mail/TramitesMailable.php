<?php

namespace App\Mail;

use App\Models\Tramite;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TramitesMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Trámite enviado correctamente";

    public $tramite;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Tramite $tramite)
    {
        $this->tramite = $tramite;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.tramite');
    }
}
