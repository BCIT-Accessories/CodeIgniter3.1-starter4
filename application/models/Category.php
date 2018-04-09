<?php

class Category extends Entity
{
	// Category Id
	public $id;
	// Category name
	public $name;
	// Equipment list
	public $equipment;

	// insist that an id is composed of numbers and is positive
	public function setId($value) {
		if (!is_numeric($value))
			throw new Exception('ID must be numeric');
		if ($value < 0)
			throw new Exception('ID must be positive');
		$this->id = $value;
		return $this;
	}

	// insist that a name must be present and no longer than 64 characters
	public function setName($value) {
        if (empty($value))
            throw new InvalidArgumentException('A name cannot be empty');
        if (strlen($value) > 64)
            throw new Exception('A name cannot be longer than 64 characters');
        $this->name = $value;
        return $this;
	}

	// insist that an equipment list must be present and no longer than 64 characters
	public function setEquipment($value) {
        if (empty($value))
            throw new InvalidArgumentException('An equipment cannot be empty');
        if (strlen($value) > 64)
            throw new Exception('An equipment cannot be longer than 64 characters');
        $this->equipment = $value;
        return $this;
	}	

}