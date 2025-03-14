<?php

namespace Inventario\Routing;

class Request
{
    public $uri;
    public $method;
    public $path;

    public function __construct($uri, $method)
    {
        $this->uri = parse_url($uri);
        $this->method = $method;
        $this->setPath($this->uri['path']);
    }

    public function setPath(string $uri)
    {
        if (strlen($uri) != 1) {
            $uri =  rtrim($uri, "/");
        }
        $this->path =$uri;
    }

}
