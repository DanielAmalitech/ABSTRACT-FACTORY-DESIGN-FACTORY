<?php

namespace Client;

require_once 'ClientInterface.php';
require_once '..\FurnitureFactory\FurnitureFactoryInterface.php';
require_once '..\FurnitureFactory\ModernFurnitureFactory.php';
require_once '..\FurnitureFactory\ClassicFurnitureFactory.php';
require_once '..\FurnitureFactory\RetroFurnitureFactory.php';

use FurnitureFactory\ClassicFurnitureFactory;
use FurnitureFactory\FurnitureFactoryInterface;
use FurnitureFactory\ModernFurnitureFactory;
use FurnitureFactory\RetroFurnitureFactory;
use KitchenTable\ClassicKitchenTable;
use KitchenTable\RetroKitchenTable;


class Client implements ClientInterface
{
    /**
     * defines an interface ( abstract factory )
     * @var FurnitureFactoryInterface
     */
    public FurnitureFactoryInterface $getFactory;
    
    public function __construct(
        FurnitureFactoryInterface $furnitureFactory
    )
    {
        $this->getFactory = $furnitureFactory;
    }

    /**
     * @inheritDoc
     */
    public final function getFurnitureDesignSofa(): void
    {
        $furnitureDesign = $this->getFactory->createSofa();
        $this->getSpecification($furnitureDesign, 'white', 223.2, 12.2);

    }

    private function getSpecification(mixed $furnitureDesign, string $color, float $width, float $height): void
    {
        echo 'Type : ' . $furnitureDesign->getType();
        echo "\n";
        echo 'Color : ' . $furnitureDesign->color($color);
        echo "\n";
        echo 'Height : ' . $furnitureDesign->height($height);
        echo "\n";
        echo 'Width : ' . $furnitureDesign->width($width);
        echo "\n";

    }

    /**
     * @inheritDoc
     */
    public final function getFurnitureDesignCoffeeTable(): void
    {
        $furnitureDesign = $this->getFactory->createCoffeeTable();
        $this->getSpecification($furnitureDesign, 'Blue', 233.2, 12.2);

    }

    /**
     * @inheritDoc
     */
    public final function getFurnitureDesignChair(): void
    {
        $furnitureDesign = $this->getFactory->createChair();
        $this->getSpecification($furnitureDesign, 'Yellow', 23.2, 2.2);

        echo "\n";
        echo $this->getFactory
            ->createChair()
            ->kitchenTableCollaborate(( new RetroKitchenTable()));
    }

    /**
     * @inheritDoc
     */
    public final function getFurnitureDesignKitchenTable(): void
    {
        // TODO: Implement getFurnitureDesignKitchenTable() method.
        $furnitureDesign = $this->getFactory->createKitchenTable();
        $this->getSpecification($furnitureDesign, 'Green', 23.2, 2.2);
    }
}

(new Client(new ModernFurnitureFactory()))
    ->getFurnitureDesignChair();

