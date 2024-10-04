<?php
namespace iamhimansu\arrayquery\loader;

abstract class LoaderAbstract implements LoaderInterface
{
    /**
     * @inheritDoc
     */
    abstract public function setData($data);

    /**
     * @inheritDoc
     */
    abstract public function getData($data);
}