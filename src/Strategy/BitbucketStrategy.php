<?php
/**
 * Humbug
 *
 * @category   Humbug
 * @package    Humbug
 * @copyright  Copyright (c) 2015 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    https://github.com/padraic/phar-updater/blob/master/LICENSE New BSD License
 *
 * This class is partially patterned after Composer's self-update.
 */

namespace Humbug\SelfUpdate\Strategy;

class BitbucketStrategy extends GithubStrategy
{

    protected function getDownloadUrl(array $package)
    {
        $baseUrl = preg_replace(
            '{\.git$}',
            '',
            $package['package']['versions'][$this->getCurrentRemoteVersion()]['source']['url']);
        $downloadUrl = sprintf('%s/downloads/%s', $baseUrl, $this->getPharName());
        return $downloadUrl;
    }

}
