<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PresupuestoMail extends Mailable
{
    use Queueable, SerializesModels;


    public $nombre, $email, $location, $postal_code, $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $email, $location, $postal_code, $data)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->location = $location;
        $this->postal_code = $postal_code;
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Nuevo presupuesto')->view('mails.presupuesto-mail');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
