<?php namespace Pabloroman\Opengraph;

use Embed\Embed as BaseEmbed;

/**
 * Class Embed
 * 
 * @package pabloroman\Opengraph
 * @author  Pablo Roman  <pablo@thenextweb.com>
 * @license https://github.com/pabloroman/Opengraph/blob/master/LICENSE MIT
 */
class Embed extends BaseEmbed {

    /**
     * Get info from a specify url.
     *
     * @param  string|Request   $url     The url or a request with the url
     * @param  array            $options
     * @return \Embed\Adapters\AdapterInterface|false
     */
    public function get($url, array $options = null)
    {
        return static::create($url, $options ?: []);
    }

    /**
     * Gets the info from a source (list of urls)
     *
     * @param  string|Request  $url  The url or a request with the source url
     * @return \Embed\Sources\SourceInterface|false
     */
    public function source($url)
    {
        return static::createSource($url);
    }

}
