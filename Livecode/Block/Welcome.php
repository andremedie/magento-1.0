<?php
namespace Andre\Livecode\Block;

class Welcome extends \Magento\Framework\View\Element\Template
{
    public function getWelcomeMessage() {
        
        return 'Welcome to us!🐶';
    }
}