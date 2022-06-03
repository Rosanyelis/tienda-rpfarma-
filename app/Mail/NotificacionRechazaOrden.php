<?php

namespace App\Mail;

use App\Models\OrdenCliente;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionRechazaOrden extends Mailable
{
    use Queueable, SerializesModels;

    public $orden;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(OrdenCliente $orden)
    {
        $this->orden = $orden;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('panel.mails.rechazorden')
                    ->subject("RpFarma - Notificación de Rechazo de Compra")
                    ->with([
                        "orden" => $this->orden,
                    ]);
    }
}
