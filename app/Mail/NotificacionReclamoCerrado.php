<?php

namespace App\Mail;

use App\Models\Reclamo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionReclamoCerrado extends Mailable
{
    use Queueable, SerializesModels;

    public $reclamo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reclamo $reclamo)
    {
        $this->reclamo = $reclamo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('panel.mails.cierrereclamo')
            ->subject("RpFarma - Cierre de Reclamo, Sugerencia u Opinión")
            ->with([
                "reclamo" => $this->reclamo,
            ]);
    }
}
