<?php

namespace App\Observers;

use App\Mail\SupportMail;
use App\Models\Support;
use Illuminate\Support\Facades\Mail;
use Resend\Laravel\Facades\Resend;

class SupportObserver
{
    /**
     * Handle the Support "created" event.
     *
     * @param Support $support
     * @return void
     */
    public function created(Support $support)
    {
        //$this->sendMail($support, SupportMail::class);
    }

    /**
     * Handle the Support "updated" event.
     *
     * @param Support $support
     * @return void
     */
    public function updated(Support $support)
    {
        $this->sendMail($support, SupportMail::class);
    }

    /**
     * Handle the Support "deleted" event.
     *
     * @param Support $support
     * @return void
     */
    public function deleted(Support $support)
    {
        //
    }

    /**
     * Handle the Support "restored" event.
     *
     * @param Support $support
     * @return void
     */
    public function restored(Support $support)
    {
        //
    }

    /**
     * Handle the Support "force deleted" event.
     *
     * @param Support $support
     * @return void
     */
    public function forceDeleted(Support $support)
    {
        //
    }

    private function sendMail(Support $support, $mailable)
    {
        Resend::emails()->send([
            'from' => env('MAIL_FROM_ADDRESS'),
            'to' => [$support->email],
            'subject' => 'Su PQR ha sido radicada con No. ' . $support->id_pqr . ' - PQR TORCOROMA',
            'html' => (new $mailable($support))->render(),
        ]);

        Resend::emails()->send([
            'from' => env('MAIL_FROM_ADDRESS'),
            'to' => [env('MAIL_USERNAME')],
            'subject' => 'Su PQR ha sido radicada con No. ' . $support->id_pqr . ' - PQR TORCOROMA',
            'html' => (new $mailable($support))->render(),
        ]);
    }
}
