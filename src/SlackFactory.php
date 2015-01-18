<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Slack;

use GuzzleHttp\Client;
use NotifyMeHQ\NotifyMe\Arr;
use NotifyMeHQ\NotifyMe\FactoryInterface;

class SlackFactory implements FactoryInterface
{
    /**
     * Create a new slack gateway instance.
     *
     * @param string[] $config
     *
     * @return \NotifyMeHQ\Slack\SlackGateway
     */
    public function make(array $config)
    {
        Arr::requires($config, ['token']);

        $client = new Client();

        return new SlackGateway($client, $config);
    }
}
