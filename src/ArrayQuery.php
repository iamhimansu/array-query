<?php
namespace iamhimansu\arrayquery;

use iamhimansu\arrayquery\loader\BaseLoader;
use iamhimansu\arrayquery\loader\LoaderInterface;
use iamhimansu\arrayquery\query\Query;

class ArrayQuery {
    /**
     * Creates a builder
     * @param \iamhimansu\arrayquery\loader\BaseLoader $loader
     * @return Query
     */
    public static function find(LoaderInterface $loader)
    {
        return new Query($loader);
    }
}