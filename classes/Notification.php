<?php

    class Notification
    {

        public static function sendEmail($to, $subject, $message)
        {
            $post = [
                'from' => 'Apace <no-reply@useapace.com>',
                'to' => $to,
                'subject' => $subject,
                'html' => $message
            ];
    
            $url = 'https://api.mailgun.net/v3/mg.tft-spark.co/messages';
    
            try {
    
                $client = new \GuzzleHttp\Client(['base_uri' => $url, 'verify' => false]);
                $response = $client->request('POST', $url, [
                    'auth' => ['api', 'key-e2fd8b7c92346d2747c5e487396abbe6'],
                    'form_params' => $post
                ]);
    
                return json_decode($response->getBody());
    
            } catch (\Exception $e) {
    
            }
        }
    }