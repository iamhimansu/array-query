<?php
namespace iamhimansu\arrayquery\loader;

class BaseLoader extends LoaderAbstract
{
    /**
     * Contains the data 
     * @var 
     */
    private $_data;

    public function __construct(array $array)
    {
        $this->setData($array);
    }

    public function setData($data)
    {
        $this->_data = $data;
    }

    public function getData($data)
    {
        return $this->getData($data);
    }

}