<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Question extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		return $this->from('einnoventiondev2@gmail.com',)
            ->subject('einnoventiondev')
            ->markdown('emails.question')
            ->with([
           'link' => 'https://zen-boyd.161-97-115-110.plesk.page/3dorgansnew/public/feedback',
				'details'=>$this->details,
            ]);
    }
}
