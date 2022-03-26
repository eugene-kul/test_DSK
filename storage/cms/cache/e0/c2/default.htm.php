<?php 
class Cms623f349a3ee73722333569_f69b3341c5afbf11d857be80653e3275Class extends Cms\Classes\LayoutCode
{
public function onSend() {
  $url = Request::url();
  $names = Input::keys();
  $values = Input::all();
  $params = compact('names', 'values', 'url');
  
  Mail::send('backend::mail.all', $params, function($message) {
    $host = str_replace($_SERVER['REQUEST_URI'], '', Request::url());
  	$this_mail = 'noreply-email-test@yandex.ru';
    $message->to($this_mail)->subject('Заявка с сайта: '.$host);
  });
  
  return true;
}
}
