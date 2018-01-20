<?php

namespace SDGBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SDGBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
