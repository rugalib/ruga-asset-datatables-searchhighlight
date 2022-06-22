<?php

declare(strict_types=1);

namespace Ruga\Asset\datatables_searchhighlight;

/**
 * ConfigProvider.
 *
 * @author Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 */
class ConfigProvider
{
    public function __invoke()
    {
        return [
            'ruga' => [
                'asset' => [
                    'rugalib/ruga-asset-datatables-searchhighlight' => [
                        'scripts' => ['dataTables.searchHighlight.min.js'],
                        'stylesheets' => ['dataTables.searchHighlight.css'],
                        'require' => ['rugalib/asset-jquery-datatables' => '^1.12', 'ruga-asset-jquery-highlight' => '*']
                    ],
                ],
            ],
        ];
    }
}
