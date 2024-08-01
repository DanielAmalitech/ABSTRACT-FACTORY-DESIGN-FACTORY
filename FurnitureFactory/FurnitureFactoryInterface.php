<?php

namespace FurnitureFactory;


use ChairInterface;
use CoffeeTable\CoffeeTableInterface;
use KitchenTable\KitchenTableInterface;
use Sofa\SofaInterface;

/**
 * defines abstract factory (Furniture)
 * return abstract products (Interfaces)
 */
interface FurnitureFactoryInterface
{
    /**
     * Creates and returns an instance of the ChairInterface.
     *
     * @return ChairInterface The newly created ChairInterface instance.
     */
    public function createChair(): ChairInterface;

    /**
     * Creates and returns an instance of the SofaInterface.
     *
     * @return SofaInterface The newly created SofaInterface instance.
     */
    public function createSofa(): SofaInterface;


    /**
     * Creates and returns an instance of the CoffeeTableInterface.
     *
     * @return CoffeeTableInterface The newly created CoffeeTableInterface instance.
     */
    public function createCoffeeTable(): CoffeeTableInterface;

    /**
     * create and return new instance of KitchenTableInterface
     * @return KitchenTableInterface The newly created KitchenTableInterface instance.
     */
    public function createKitchenTable(): KitchenTableInterface;


}