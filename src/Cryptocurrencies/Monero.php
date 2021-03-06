<?php

/**
 * Cryptocurrency list package.
 * All cryptocurrencies infos in a single package without using a database.
 *
 * Copyright (C) 2018-2019 <Crypto Technology srl>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace CryptoTech\Cryptocurrency;

/**
 * Class Monero.
 */
class Monero extends Cryptocurrency
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $this->id = 328;
        $this->name = 'Monero';
        $this->symbol = 'XMR';
        $this->type = 'coin';
        $this->mineable = true;
        $this->description = 'Monero is a private, secure, and untraceable cryptocurrency that was launched 18th April 2014. With Monero, it is said you are in complete control of your funds and privacy no one else can see anyone else\'s balances or transactions.';
        $this->website = [
            'https://ww.getmonero.org',
        ];
        $this->explorer = [
            'http://moneroblocks.info',
            'http://chainradar.com/xmr/blocks',
        ];
        $this->source_code = [
            'https://github.com/monero-project/monero',
        ];

        return $this;
    }
}
