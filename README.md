### Features

- Perform query on array and objects
- ARM (Array Relational Mapping) gives the freedom to perform complex operations on array, just like SQL
- Compatible with array of objects
- Supports data to be loaded from array
- Supports data to be loaded from JSON
- Supports join of data based on keys
- Support addition on indexes
- Support Unique check

# Array Query

#### Syntax

```php
<?php
  $loader = ArrayLoader::loadFromJsonFile(__DIR__ . '/../json/data-1.json');
  $query = ArrayQuery::find($loader);
  $columns = ['k_id', 'id_id'];
		
  /**
  * Select Query
  */
  $results = $query
  ->select($columns)
  ->where(['id' => 1])
  ->groupBy($columns)
	->all();
	
			
  /**
  * Update Query
  */
  $rowsAffected1 = $query->update($columns)
  ->where($conditions)
  ->execute();
  
  $rowsAffected2 = $query->update($columns, $conditions)->execute();
    ?>
```
