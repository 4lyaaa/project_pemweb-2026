<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordChangedMail extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;

    public $tanggal;

    public $jam;

    public function __construct(User $user)
    {
        $this->user = $user;

        $this->tanggal = now()->translatedFormat('d F Y');

        $this->jam = now()->format('H:i');
    }

    public function build()
    {
        return $this
            ->subject('Password SweetRecipe Berhasil Diubah')
            ->view('emails.password-changed');
    }
}