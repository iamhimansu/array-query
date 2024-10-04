<?php

namespace iamhimansu\arrayquery\loader;

interface LoaderInterface
{
    /**
     * Method to load the data
     * @param mixed $data
     * @return void
     */
    public function setData($data);

    /**
     * Gets the data 
     * @param mixed $data
     * @return void
     */
    public function getData($data);
}