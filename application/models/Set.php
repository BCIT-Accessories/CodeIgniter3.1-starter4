<?php

class Set extends Entity
{
	// Set id
	public $id;
	// Set name
	public $name;
	// Set helmet code
	public $helmet;
	// Set chest code
	public $chest;
	// Set Left shoulder pad code
	public $shoulder_left; 
	// Set right shoulder pad code
	public $shoulder_right;
	// Set wrist guard code
	public $wrist;

	// insist that an id is not empty composed of numbers and is positive
	public function setId($value) {
        if (empty($value))
            throw new InvalidArgumentException('An ID cannot be empty');
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

	// insist that a helmet code must be positive, and no less than 100
	public function setHelmet($value) {
		if (!is_numeric($value))
			throw new Exception('helmet code must be numeric');
		if ($value < 100)
			throw new Exception('helmet code must be greater or equal to 100');
		$this->helmet = $value;
		return $this;
	}	

	// insist that a chest code must be positive, and no less than 100
	public function setChest($value) {
		if (!is_numeric($value))
			throw new Exception('Chest code must be numeric');
		if ($value < 100)
			throw new Exception('Chest code must be greater or equal to 100');
		$this->chest = $value;
		return $this;
	}	

	// insist that a shoulder_left code must be positive, and no less than 100
	public function setShoulder_left($value) {
        if (!is_numeric($value))
			throw new Exception('Shoulder_left code must be numeric');
		if ($value < 100)
			throw new Exception('Shoulder_left code must be greater or equal to 100');
        $this->shoulder_left = $value;
        return $this;
	}	

	// insist that a shoulder_right code must be positive, and no less than 100
	public function setShoulder_right($value) {
        if (!is_numeric($value))
			throw new Exception('Shoulder_right code must be numeric');
		if ($value < 100)
			throw new Exception('Shoulder_right code must be greater or equal to 100');
        $this->shoulder_right = $value;
        return $this;
	}	

	// insist that a wrist code must be positive, and no less than 100
	public function setWrist($value) {
        if (!is_numeric($value))
			throw new Exception('Shoulder_right code must be numeric');
		if ($value < 100)
			throw new Exception('Shoulder_right code must be greater or equal to 100');
        $this->wrist = $value;
        return $this;
	}
}