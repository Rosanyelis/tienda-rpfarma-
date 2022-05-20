<?php

namespace App\Mail;

use App\Models\Reclamo;
use App\Models\UserReclamo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SeguimientoReclamo extends Mailable
{
    use Queueable, SerializesModels;

    public $reclamo;
    public $respuesta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reclamo $reclamo, UserReclamo $respuesta)
    {
        $this->reclamo = $reclamo;
        $this->respuesta = $respuesta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('panel.mails.respuestareclamo')
            ->subject("RpFarma - Respuesta a su Reclamo, Sugerencia u Opinión")
            ->with([
                "reclamo" => $this->reclamo,
                "respuesta" => $this->respuesta,
            ]);
    }
}
