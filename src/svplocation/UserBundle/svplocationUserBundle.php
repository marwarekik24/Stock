<?php

namespace svplocation\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class svplocationUserBundle extends Bundle
{
    
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
