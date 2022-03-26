<?php 
class Cms623f60cfc4ec8198896365_6440598f5ecc85709bb846de5f842dc0Class extends Cms\Classes\LayoutCode
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
