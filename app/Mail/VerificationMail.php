<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerificationMail extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   */
  public function __construct(private string $link, private string $nameMessage, private string $discardLink)
  {

  }

  // public function build() {
  //     return $this->subject('Verification Mail')
  //     ->view('emails.verification')
  //     ->with([
  //         "link"=>$this->link,
  //             "name"=>$this->nameMessage,
  //             "discard"=>$this->discardLink
  //     ])
  //     ->attach($this->photo->getRealPath(),
  //         [
  //             'as' => $this->photo->getClientOriginalName(),
  //             'mime' => $this->photo->getClientMimeType(),
  //         ]);
  // }

  /**
   * Get the message envelope.
   */
  public function envelope(): Envelope
  {
    return new Envelope(
      subject: 'Verification Mail',
    );

  }

  /**
   * Get the message content definition.
   */
  public function content(): Content
  {
    return new Content(
      view: 'emails.verification',
      with: [
        "link" => $this->link,
        "name" => $this->nameMessage,
        "discard" => $this->discardLink
      ]
    );
  }

  /**
   * Get the attachments for the message.
   *
   * @return array<int, \Illuminate\Mail\Mailables\Attachment>
   */

  public function attachments(): array
  {

    return [

    ];
  }
}
