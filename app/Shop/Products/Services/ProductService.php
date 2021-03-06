<?php namespace TGL\Shop\Products\Services;

use TGL\Shop\Products\Repositories\ProductRepository;

class ProductService
{
    /**
     * @var ProductRepository
     */
    protected $productRepo;

    /**
     * @param ProductRepository $productRepo
     */
    function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getProduct($slug)
    {
        return $this->productRepo->getProduct($slug);
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        return $this->productRepo->getProducts();
    }
}