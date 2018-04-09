<?php

class Equip extends Entity
{
	// Equipment id
	public $id;
	// Equipment description
	public $desc;
	// Equipment image
	public $image;
	// Equipment protection
	public $protection;
	// Equipment speed
	public $speed;
	// Equipment weight
	public $weight;
	// Equipment category name
	public $name;
	// Equipment category id
	public $categoryId;

	// insist that an id is composed of numbers and is positive and not less than 100
	public function setId($value) {
		if (!is_numeric($value))
			throw new Exception('Equipment ID must be numeric');
		if ($value < 100)
			throw new Exception('Equipment ID must be greater than or equal to 100');
		$this->id = $value;
		return $this;
	}

	// insist that a description must be present and no longer than 64 characters
	public function setDesc($value) {
        if (empty($value))
            throw new InvalidArgumentException('A description cannot be empty');
        if (strlen($value) > 64)
            throw new Exception('A name cannot be longer than 64 characters');
        $this->desc = $value;
        return $this;
	}

	// insist that an image path must be present
	public function setImage($value) {
        if (empty($value))
            throw new InvalidArgumentException('An image path cannot be empty');
        if (strlen($value) > 64)
            throw new Exception('A description cannot be longer than 64 characters');
        $this->image = $value;
        return $this;
	}

	// insist that a protectoin is composed of numbers
	public function setProtection($value) {
		if (!is_numeric($value))
			throw new Exception('Protection must be numeric');
		$this->protection = $value;
		return $this;
	}

	// insist that a speed is composed of numbers
	public function setSpeed($value) {
		if (!is_numeric($value))
			throw new Exception('Speed must be numeric');
		$this->id = $value;
		return $this;
	}

	// insist that a weight is composed of numbers
	public function setWeight($value) {
		if (!is_numeric($value))
			throw new Exception('Weight must be numeric');
		$this->weight = $value;
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

	// insist that an id is composed of numbers and is positive
	public function setCategoryId($value) {
		if (!is_numeric($value))
			throw new Exception('CategoryId must be numeric');
		if ($value < 0)
			throw new Exception('CategoryId must be positive');
		$this->categoryId = $value;
		return $this;
	}
}