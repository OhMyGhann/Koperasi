<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class TanggalPengembalianNotifikasi extends Notification
{
    use Queueable;

    protected $nasabah;

    public function __construct($nasabah)
    {
        $this->nasabah = $nasabah;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Tanggal pengembalian pinjaman Anda sudah tiba.')
            ->line('Mohon untuk segera melaksanakan pembayaran angsuran.')
            ->action('Lihat Detail', url(route('data-peminjam.show', ['id' => $this->nasabah->id])))
            ->line('Terima kasih atas kerjasamanya.');
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Tanggal pengembalian pinjaman Anda sudah tiba. Mohon untuk segera melaksanakan pembayaran angsuran.',
            'nasabah_id' => $this->nasabah->id,
        ];
    }
}
