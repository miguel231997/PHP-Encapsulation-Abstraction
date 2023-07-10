<?php

//Encapsulation: Creating a class to encapsulate data and methods

class Vehicle 
{
    private $brand;
    private $model;
    private $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    public function getModiel()
    {
        return $this->model;
    }
    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getYeat(){
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function startEngine()
    {
        return "The {$this->brand} {$this->model} is starting the engine.";
    }
    
}

//Abstraction: Creating an abstract class that defines a common structure

abstract class VehicleType
{
    protected $brand;
    protected $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    abstract public function drive();

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }
}

//create a class extending the abstract class

class Car extends VehicleType
{
    public function drive()
    {
        return "The {$this->brand} {$this->model} is drving.";
    }
}

//Usage example:

$car = new Car("Toyota", "Camry");
echo $car->drive(); //Output: The toyota Camry is driving


?>

In this example, we have a Car class that encapsulates the data (brand, model, and year) and provides methods to get and set those values. The startEngine() method is an example of behavior encapsulated within the class.

We also have an abstract class Vehicle that defines a common structure and behavior for vehicles. It has a constructor to set the brand and model, as well as an abstract method drive(). The Car class extends the Vehicle class and implements the drive() method, providing its own implementation.

By using encapsulation, we encapsulate the data of the Car class and control access to it through getter and setter methods. Abstraction allows us to define a common structure and behavior for vehicles using the Vehicle class, and the Car class can inherit and implement that behavior.

This example demonstrates how encapsulation and abstraction help in organizing code, hiding implementation details, and providing a clear separation of concerns.