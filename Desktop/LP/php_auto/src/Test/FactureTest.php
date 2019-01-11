<?php
/**
 * Created by PhpStorm.
 * User: yohan
 * Date: 11/01/2019
 * Time: 14:37
 */

declare(strict_types=1);

namespace php_auto;
use PHPUnit\Framework\TestCase;

final class FactureTest extends TestCase
{
    public function testIsSetInvoice()
    {
        $l1 = new LigneFacture('Art1', 20, 20);
        $l2 = new LigneFacture('Art2', 25, 20);
        $l3 = new LigneFacture('Art3', 30, 20);
        $tablist = [$l1, $l2, $l3];
        $facture = new Facture($tablist);

        $this->assertEquals(54, $facture->calculateTotal());
    }


}
