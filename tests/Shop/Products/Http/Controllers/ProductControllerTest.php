<?php

class ProductControllerTest extends TestCase
{
    /** @test */
    public function should_load_individual_product_page()
    {
        $response = $this->call('GET', '/product/brooke1669');

        $this->assertEquals(200, $response->getStatusCode());
    }

    /** @test */
    public function should_load_products_page()
    {
        $response = $this->call('GET', '/products');

        $this->assertEquals(200, $response->getStatusCode());
    }

    /** @test */
    public function should_load_add_product_page()
    {
        $response = $this->call('GET', '/admin/product/add-product');

        $this->assertEquals(200, $response->getStatusCode());
    }
}