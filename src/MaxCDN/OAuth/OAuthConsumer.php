<?php
/**
 * OAuth Consumer representation.
 */
namespace MaxCDN\OAuth;

class OAuthConsumer {
    public $key;
    public $secret;

    public function __construct($key, $secret, $callback_url=NULL) {
        $this->key = $key;
        $this->secret = $secret;
        $this->callback_url = $callback_url;
    }

    public function __toString() {
        return "\\MaxCDN\\OAuth\\OAuthConsumer[key=$this->key,secret=$this->secret]";
    }
}

