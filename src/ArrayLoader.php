<?php
namespace iamhimansu\arrayquery;

use iamhimansu\arrayquery\loader\BaseLoader;
use iamhimansu\arrayquery\loader\JsonFileLoader;
use iamhimansu\arrayquery\loader\JsonLoader;

class ArrayLoader
{
    private static $_loaders = [];

    /**
     * Loads the data and returns an instance of a loader
     * @param array $array
     * @return BaseLoader
     */
    public static function load(array $array)
    {
        $loader = new BaseLoader($array);
        self::$_loaders[] = $loader;
        return $loader;
    }

    /**
     * Loads the data and returns an instance of a loader
     * @param array $array
     * @return JsonLoader
     */
    public static function loadFromJsonContent(string $content)
    {
        $loader = new JsonLoader(json_decode($content, true));
        self::$_loaders[] = $loader;
        return $loader;
    }

    /**
     * Loads the data and returns an instance of a loader
     * @param string $absolutePath
     * @return JsonFileLoader
     */
    public static function loadFromJsonFile(string $absolutePath)
    {
        $loader = new JsonFileLoader($absolutePath);
        self::$_loaders[] = $loader;
        return $loader;
    }
    /**
     * Returns all the loaders
     * @return array Loader[]
     */
    public static function getLoaders()
    {
        return self::$_loaders;
    }
}