class Street {
  protected $speedLimit;
  protected $cars;

  public function __construct($speedLimit = 200) {
    $this->cars = array(); //Initialize the variable
    $this->speedLimit = $speedLimit;
  }

  protected function isStreetLegal($car) {
    if($car->getMaximumSpeed() < $this->speedLimit) {
      return true;
    } else {
      return false;
    }
  }

  public function addCar($car) {
    if($this->isStreetLegal($car)) {
      echo 'The Car was allowed on the road.';
      $this->cars[] = $car;
    } else {
      echo 'The Car is too fast and was not allowed on the road.';
    }
  }

}