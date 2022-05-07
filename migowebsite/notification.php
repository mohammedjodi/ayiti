<?php

function send_email($email, $subject, $msg) {

  $api_key= "key-ad853d626bd5ad64f2222353d5890eed";/* Api Key got from https://mailgun.com/cp/my_account */
  $domain = "mg.lounge45.com";/* Domain Name you given to Mailgun */

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_USERPWD, 'api:'.$api_key);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/'.$domain.'/messages');
  curl_setopt($ch, CURLOPT_POSTFIELDS, array(
      'from' => 'Jodi <jodi@lounge45.com>',
      'to' => $email,
      'subject' => $subject,
      'html' => $msg
  ));

  //Todo: Open up so emails can go through
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}