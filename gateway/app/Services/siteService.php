<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;

class siteService {
    use ConsumesExternalService;
     /*
     *@var string

     */

     public $baseUri;

     public function __construct() {
          $this->baseUri = config('services.site1.base_uri');
     }


     /*
     *@return string
     */

     public function showall() {
          return $this->performRequest('GET', 'api/GETusers');
     }

     public function showUser($id) {
          return $this->performRequest('GET', "api/SEARCHusers/{$id}");
     }

     public function addUser($data) {
          return $this->performRequest('POST', 'api/ADDusers/', $data);
     }

     public function updateUser($data, $id) {
          return $this->performRequest('PATCH', "api/UPDATEusers/{$id}", $data);
     }

     public function deleteUser($id) {
          return $this->performRequest('DELETE', "api/DELETEusers/{$id}");
     }
}