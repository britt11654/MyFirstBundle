<?php

// src/Service/MyFirstService.php

namespace CommonGateway\MyFirstBundle\Service;

class MyFirstService
{

    /*
     * Returns a welcoming string
     * 
     * @return array 
     */
    public function MyFirstHandler(array $data, array $configuration): array
    {
        return ['response' => 'Hello. Your MyFirstBundle works'];
    }
}
