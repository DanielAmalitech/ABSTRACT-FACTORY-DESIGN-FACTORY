<?php

namespace FurnitureFactory;

require_once 'FurnitureFactoryInterface.php';
require_once '..\Sofa\RetroSofa.php';
require_once '..\Chair\RetroChair.php';
require_once '..\CoffeeTable\RetroCoffeeTable.php';
require_once '..\KitchenTable\RetroKitchenTable.php';
use ChairInterface;
use CoffeeTable\CoffeeTableInterface;
use CoffeeTable\RetroCoffeeTable;
use KitchenTable\KitchenTableInterface;
use KitchenTable\RetroKitchenTable;
use RetroChair;
use Sofa\RetroSofa;
use Sofa\SofaInterface;

/**
 * defines concrete Factory (Retro Variants)
 * produces Retro furniture objects
 * implements creation of the abstract factory
 */
class RetroFurnitureFactory implements FurnitureFactoryInterface
{

    /**
     * @inheritDoc
     */
    public final function createChair(): ChairInterface
    {
        return new RetroChair();
    }

    /**
     * @inheritDoc
     */
    public final function createSofa(): SofaInterface
    {
        return new RetroSofa();
    }

    /**
     * @inheritDoc
     */
    public final function createCoffeeTable(): CoffeeTableInterface
    {
        return new RetroCoffeeTable();
    }

    /**
     * @inheritDoc
     */
    public function createKitchenTable(): KitchenTableInterface
    {
        // TODO: Implement createKitchenTable() method.
        return new RetroKitchenTable();
    }
}