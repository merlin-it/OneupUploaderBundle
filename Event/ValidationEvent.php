<?php

namespace Oneup\UploaderBundle\Event;

use Oneup\UploaderBundle\Uploader\File\FileInterface;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Request;

class ValidationEvent extends Event
{
    protected $file;
    protected $config;
    protected $type;
    protected $request;
    protected $field;

    public function __construct(FileInterface $file, Request $request, array $config, $type, $field)
    {
        $this->file = $file;
        $this->config = $config;
        $this->type = $type;
        $this->request = $request;
        $this->field = $field;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getField()
    {
        return $this->field;
    }
}
