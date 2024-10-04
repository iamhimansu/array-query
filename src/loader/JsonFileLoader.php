<?php
namespace iamhimansu\arrayquery\loader;

class JsonFileLoader extends JsonLoader
{
    public function __construct(string $path)
    {
        try {
            $rawData = file_get_contents($path);
            $this->setData(json_decode($rawData, true));
        } catch (\Exception | \Throwable $et) {
            throw $et;
        }
    }
}