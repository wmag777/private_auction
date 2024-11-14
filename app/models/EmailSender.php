<?php
class EmailSender {
    private $to;
    private $subject;
    private $message;
    private $headers;

    public function __construct($to, $subject, $message) {
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
        $this->headers = "Content-Type: text/plain; charset=UTF-8";
    }

    public function setFrom($from) {
        $this->headers .= "From: $from";
    }

    public function setReplyTo($replyTo) {
        $this->headers .= "Reply-To: $replyTo";
    }

    public function send() {
        return mail($this->to, $this->subject, $this->message, $this->headers);
    }
}