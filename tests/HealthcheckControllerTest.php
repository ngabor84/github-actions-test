<?php

namespace Test;

class HealthcheckControllerTest extends TestCase
{
    /**
     * @test
     */
    public function healthcheck_called_respondWith200()
    {
        $this->get('/healthcheck');

        $this->assertResponseStatus(200);
    }
}
