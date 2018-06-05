<?php

declare(strict_types=1);

namespace BrickLib\Exporter;

use BrickLib\Collection;
use BrickLib\Lot;
use BrickLib\Writer\WriterInterface;

class BrickLinkXmlExporter implements ExporterInterface
{
    public function export(Collection $collection, WriterInterface $writer): void
    {
        $writer->write('<INVENTORY>');

        foreach ($collection as $lot) {
            if (!$lot instanceof Lot) {
                continue;
            }

            $item = [
                'ItemType' => 'P',
                'ItemID' => $lot->getBrick()->getDesign()->toBrickLinkDesign(),
                'Color' => $lot->getBrick()->getColor()->toBrickLinkColor(),
                'MinQty' => $lot->getQuantity(),
            ];

            $writer->write('    <ITEM>');
            foreach ($item as $key => $value) {
                $writer->write(sprintf('        <%1$s>%2$s</%1$s>', strtoupper($key), $value));
            }
            $writer->write('    </ITEM>');
        }

        $writer->write('</INVENTORY>');
        $writer->flush();
    }
}
