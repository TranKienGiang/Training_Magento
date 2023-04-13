<?php

namespace AHT\Route\Plugin\Model;

use Magento\Catalog\Api\CategoryRepositoryInterface;
use Magento\Framework\App\RequestInterface;

class ProductPlugin
{
    protected $request;
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * @param RequestInterface $request
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        CategoryRepositoryInterface $categoryRepository
    ) {
        $this->request = $request;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param null $result
     * @param \Magento\Catalog\Model\Product $subject
     * @return string $result
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result): string
    {
        if ($this->request->getFullActionName() == 'catalog_category_view') {
            $id = $this->request->getParam('id');
            $category = $this->categoryRepository->get($id);
            $category_name = $category->getName();
            $result = $category_name . '_' . $result;
        }
        return $result;
    }
}
