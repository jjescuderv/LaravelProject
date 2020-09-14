<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

//Juan José Escudero

class Car extends Model 
{

    // Attributes id, licensePlate, color, brand, model, price, description, mileage, availability

    protected $fillable = ['brand', 'model', 'color', 'price', 'mileage', 'description' , 'availability', 'licensePlate'];

    public static function validate(Request $request) 
    {
        $request -> validate([
            "brand" => "required",
            "model" => "required",
            "color" => "required",
            "price" => "required|numeric|gt:0",
            "mileage" => "required|numeric|gte:0",
            "description" => "required",
            "availability" => "required|boolean",
            "licensePlate" => "required",
        ]);
    }

    public function getId() 
    {
        return $this->attributes['id'];
    }

    public function setId($id) 
    {
        $this->attributes['id'] = $id;
    }

    public function getBrand() 
    {
        return $this->attributes['brand'];
    }

    public function setBrand($brand) 
    {
        $this->attributes['brand'] = $brand;
    }

    public function getModel() 
    {
        return $this->attributes['model'];
    }

    public function setModel($model) 
    {
        $this->attributes['model'] = $model;
    }

    public function getColor() 
    {
        return $this->attributes['color'];
    }

    public function setColor($color) 
    {
        $this->attributes['color'] = $color;
    }

    public function getPrice() 
    {
        return $this->attributes['price'];
    }

    public function setPrice($price) 
    {
        $this->attributes['price'] = $price;
    }

    public function getMileage() 
    {
        return $this->attributes['mileage'];
    }

    public function setMileage($mileage) 
    {
        $this->attributes['mileage'] = $mileage;
    }

    public function getDescription() 
    {
        return $this->attributes['description'];
    }

    public function setDescription($description) 
    {
        $this->attributes['description'] = $description;
    }

    public function getAvailability() 
    {
        return $this->attributes['availability'];
    }

    public function setAvailability($availability) 
    {
        $this->attributes['availability'] = $availability;
    }

    public function getLicensePlate() 
    {
        return $this->attributes['licensePlate'];
    }

    public function setLicensePlate($licensePlate) 
    {
        $this->attributes['licensePlate'] = $licensePlate;
    }

    public function questions() 
    {
        return $this->hasMany(Question::class);
    }

}