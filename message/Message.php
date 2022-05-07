<?php

namespace Message;

use GuzzleHttp\Client;

class Message{    
    private $url;
    private $content;

    public function __construct(Array $arr = [])
    {
        if(!empty($arr)){
            foreach($arr as $key => $val){
                $this->{$key} = $val;
            }
        }
    }

    public function send(){
        $client = new Client();
        try {
            $request = $client->post($this->getUrl(), [
                'body' => json_encode($this->getContent()),
                'headers' => [
                    'Content-Type'     => 'application/json',
                ]
            ]);
            if($request->getBody()){
                echo $request->getBody();
            }
        } catch (\Throwable $th) {
            print_r('error');
            print_r($th->getMessage());
        }
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}