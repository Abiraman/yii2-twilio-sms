<?php

namespace twilio;
use twilio\service\twilio;
/**
 * This is just an example.
 */
class Twilio extends \yii\base\Widget
{
    public $sid;
    public $token;
    public $twilioNumber;
    public static function sendSms($number,$message){
       $service=  new twilio\Services_Twilio($this->sid,  $this->token);
       try {
          $message = $service->account->messages->sendMessage($this->twilioNumber, $number,$message ); 
       } catch (Services_Twilio_RestException $e) {
           throw $e->getMessage();
       }
       
    }
}
