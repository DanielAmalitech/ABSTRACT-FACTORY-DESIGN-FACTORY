<?php

namespace FurnitureFactory;

require_once 'FurnitureFactoryInterface.php';
require_once '..\Sofa\ClassicSofa.php';
require_once '..\Chair\ClassicChair.php';
require_once '..\CoffeeTable\ClassicCoffeeTable.php';
require_once '..\KitchenTable\ClassicKitchenTable.php';

use ChairInterface;
use ClassicChair;
use CoffeeTable\ClassicCoffeeTable;
use CoffeeTable\CoffeeTableInterface;
use KitchenTable\ClassicKitchenTable;
use KitchenTable\KitchenTableInterface;
use Sofa\ClassicSofa;
use Sofa\SofaInterface;

/**
 * defines concrete Factory (Classic Variants)
 * produces classic furniture objects
 * implements creation of the abstract factory
 */
class ClassicFurnitureFactory implements FurnitureFactoryInterface
{

    /**
     *  create new classic chair
     * @inheritDoc
     */
    public final function createChair() : ChairInterface
    {
         return new ClassicChair();
    }


    /**
     * create new classic sofa
     * @inheritDoc
     */
    public final function createSofa(): SofaInterface
    {
       return new ClassicSofa();
    }

    /**
     * create new classic coffee table
     * @inheritDoc
     */
    public final function createCoffeeTable(): CoffeeTableInterface
    {
        return new ClassicCoffeeTable();
    }

    /**
     * @inheritDoc
     */
    public final function createKitchenTable(): KitchenTableInterface
    {
        // TODO: Implement createKitchenTable() method.
        return new ClassicKitchenTable();
    }
}
