<?php

namespace php_auto;


class Facture extends LigneFacture
{
    private $lines;
    /**
     * @param LigneFacture[] $lines
     */
    public function __construct(array $lines = [])
    {
        $this->lines = $lines;
    }
    /**
     * @param LigneFacture $line
     */
    public function add(LigneFacture $line)
    {
        $this->lines[] = $line;
    }
    /**
     * @return int
     */
    public function getNumberOfLines()
    {
        return count($this->lines);
    }
    /**
     * @return float
     */
    public function calculateTotal()
    {
        $total = 0;
        foreach ($this->lines as $line) {
            $total += $line->calculateTotal();
        }
        return $total;
    }
    public function __toString()
    {
        $res = '';
        foreach ($this->lines as $line) {
            $res .= '- ' . $line->getDescription() . ' : ' . $line->getAmount() . "\n";
        }
        $res .= "Total: {$this->calculateTotal()} \n";
        return $res;
    }

}