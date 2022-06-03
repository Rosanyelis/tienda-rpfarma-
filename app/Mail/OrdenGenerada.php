<?php

namespace App\Mail;

use App\Models\OrdenCliente;
// use App\Models\DetallesOrden;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrdenGenerada extends Mailable
{
    use Queueable, SerializesModels;

    public $orden;
    // public $detalles;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(OrdenCliente $orden)
    {
        $this->orden = $orden;
        // $this->detalles = $detalles;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('panel.mails.ordencompra')
                    ->subject("RpFarma - Orden de Compra")
                    ->with([
                        "orden" => $this->orden,
                        // "detalles" => $this->detalles,
                    ]);
    }
}
