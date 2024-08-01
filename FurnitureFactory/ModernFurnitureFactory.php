<?php

namespace FurnitureFactory;

require_once 'FurnitureFactoryInterface.php';
require_once '..\Chair\ModernChair.php';
require_once '..\Sofa\ModernSofa.php';
require_once '..\CoffeeTable\ModernCoffeeTable.php';
require_once '..\KitchenTable\ModernKitchenTable.php';

use ChairInterface;
use CoffeeTable\CoffeeTableInterface;
use CoffeeTable\ModernCoffeeTable;
use KitchenTable\KitchenTableInterface;
use KitchenTable\ModernKitchenTable;
use ModernChair;
use Sofa\ModernSofa;
use Sofa\SofaInterface;

/**
 * defines concrete Factory (Modern Variants)
 * produces modern furniture objects
 * implements creation of the abstract factory
 */
class ModernFurnitureFactory implements FurnitureFactoryInterface
{

    /**
     * create moder chair
     * @inheritDoc
     */
    public final function createChair(): ChairInterface
    {
        return new ModernChair();
    }

    /**
     * create modern sofa
     * @inheritDoc
     */
    public final function createSofa(): SofaInterface
    {
        return new ModernSofa();
    }

    /**
     * @inheritDoc
     */
    public final function createCoffeeTable(): CoffeeTableInterface
    {
        return new ModernCoffeeTable();
    }

    /**
     * @inheritDoc
     */
    public final function createKitchenTable(): KitchenTableInterface
    {
        // TODO: Implement createKitchenTable() method.
        return new ModernKitchenTable();
    }
}