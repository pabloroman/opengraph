<?php

use Mockery as m;
use Pabloroman\Opengraph\Opengraph;

class OpengraphTest extends PHPUnit_Framework_TestCase {

    protected $embed;
    protected $cache;
    protected $opengraph;

	public function setUp()
	{
		$this->embed = m::mock('pabloroman\Opengraph\Embed');
        $this->cache = m::mock('Illuminate\Cache\Repository');
		$this->opengraph = new Opengraph($this->embed, $this->cache);
	}

	public function test_initialize()
	{
		$this->assertInstanceOf('pabloroman\Opengraph\Opengraph', $this->opengraph);
	}

	public function test_get_info_from_a_specify_url()
	{
		$url = 'https://github.com/gravitano';

        $this->embed->shouldReceive('get')->once()->with($url, '')->andReturn(array('url' => $url));

        $info = $this->opengraph->get($url);

		$this->assertTrue(is_array($info));
		$this->assertArrayHasKey('url', $info);
	}

	public function test_get_info_from_a_specify_url_but_false_returned()
	{
		$url = 'foo';

        $this->embed->shouldReceive('get')->once()->with($url, '')->andReturn(false);

        $info = $this->opengraph->get($url);

		$this->assertFalse($info);
	}

    public function test_get_info_from_a_specify_url_and_also_use_laravel_cache_manager()
    {

        $url = 'https://www.youtube.com/watch?v=PP1xn5wHtxE';

        $this->embed->shouldReceive('get')->once()->with($url, '')->andReturn(array('url' => $url));
        $this->cache->shouldReceive('remember')->once()->andReturn(array('url' => $url));

        $info = $this->opengraph->cache($url);

        $this->assertTrue(is_array($info));
        $this->assertArrayHasKey('url', $info);
    }

}