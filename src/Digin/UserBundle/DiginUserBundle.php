<?php

namespace Digin\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DiginUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
