<?php

namespace App\Handlers;

use GuzzleHttp\Client;
use Overtrue\Pinyin\Pinyin;

class SlugTranslateHandler
{
    public function translate($text)
    {
        $http = new Client;
        $api = 'http://api.fanyi.baidu.com/api/trans/vip/translate?';
        $appid = config('services.baidu.translate.appid');
        $key = config('services.baidu.translate.key');
        $time = time();

        if(empty($appid || $key)){
            return $this->pinyin($text);
        }

        $sign = md5($appid . $text . $salt . $key);
        $query = http_build_query([
                "q" => $text,
                "from" => "zh",
                "to" => "en",
                "appid" => $appid,
                "salt" => $salt,
                "key" => $key,
            ]);
        $response = $http->get($api.$query);
        $result = json_decode($response->getBody(),true);

        if(isset($result['trans_result'][0]['dst'])){
            return str_slug($result['tans_result'][0]['dst']);
        }else{
            return $this->pinyin($text);
        }
    }

    public function pinyin($text)
    {
        return str_slug(app(Pinyin::class)->permalink($text));
    }
}