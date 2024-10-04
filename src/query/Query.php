<?php
namespace iamhimansu\arrayquery\query;

use iamhimansu\arrayquery\loader\LoaderInterface;

class Query extends QueryAbstract
{
    public function __construct(LoaderInterface $loader)
    {

    }

      /**
     * Adds the conditions
     * @param array $conditions
     * @return self
     */
    public function where(array $conditions) {
        return $this;
    }

    /**
     * Groups the data
     * @param array $fields
     * @return self
     */
    public function groupBy(array $fields){
        return $this;
    }

    /**
     * Filters after grouping the data
     * @param array $fields
     * @return self
     */
    public function having() {
        return $this;
    }

    /**
     * Select the columns
     * @param mixed $fields
     * @return self
     */
    public function select($fields){
        return $this;
    }

    /**
     * Orders the dataset
     * @return self
     */
    public function orderBy() {
        return $this;
    }

    /**
     * Limits the data
     * @return self
     */
    public function limit(int $limit){
        return $this;
    }

    /**
     * Offset the data
     * @return self
     */
    public function offset() {
        return $this;  
    }

    /**
     * Returns the data set
     * @return array
     */
    public function all() {
        return [];
    }
}