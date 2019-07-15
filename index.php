<?php


interface TaxiFactory
{
    public function createModelTaxi();

    public function createPriceTaxi();
}

Class EconomyTaxi implements TaxiFactory
{
    public function createModelTaxi()
    {
        return new EconomyModel;
    }
    public function createPriceTaxi()
    {
        return new EconomyPrice;
    }
}
Class StandardTaxi implements TaxiFactory
{
    public function createModelTaxi()
    {
        return new StandardModel;
    }
    public function createPriceTaxi()
    {
        return new StandardPrice;
    }
}
Class LuxuryTaxi implements TaxiFactory
{
    public function createModelTaxi()
    {
        return new LuxuryModel;
    }
    public function createPriceTaxi()
    {
        return new LuxuryPrice;
    }
}

interface Model
{
    public function getModel();
}

class EconomyModel implements Model
{
    public function getModel()
    {
        return "model Lada";
    }
}
class StandardModel implements Model
{
    public function getModel()
    {
        return "model Skoda";
    }
}
class LuxuryModel implements Model
{
    public function getModel()
    {
        return " model Audi";
    }
}
interface Price
{
    public function getPrice();
}
class EconomyPrice implements Price
{
    public function getPrice()
    {
        return "price 100$";
    }
}
class StandardPrice implements Price
{
    public function getPrice()
    {
        return "price 200$";
    }
}
class LuxuryPrice implements Price
{
    public function getPrice()
    {
        return "price 300$";
    }
}

function clientCode(TaxiFactory $factory)
{
    $model = $factory->createModelTaxi();
    $price = $factory->createPriceTaxi();

    echo $model->getModel() . "\n";
    echo $price->getPrice() . "\n";
}

echo "Client: client code with the taxi type:\n";
clientCode(new StandardTaxi);

echo "\n";
























