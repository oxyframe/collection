<?php

namespace Oxyframe;

class Collection
{
    use Attributes;
    public function __construct(string $data = null)
    {
        $this->hasAttribute("data", $data);
    }
}
