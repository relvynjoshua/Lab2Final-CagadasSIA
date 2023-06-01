<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Services\siteService2;

Class site2Controller extends Controller 
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @var siteService2
     */
    public $siteService;
    
    public function __construct(siteService2 $siteService)
    {
        $this->siteService = $siteService;
    }
    
    // Get/show users
    public function getUsers()
    {
        return $this->successResponse($this->siteService->showall());
    }

    // Add users
    public function addUsers(Request $request )
    {
        return $this->successResponse($this->siteService->addUser($request->all()));
    }

    // Update users
    public function updateUser(Request $request, $id) 
    {
        return $this->successResponse($this->siteService->updateUser($data->all(), $id));
    }

    // Delete user
    public function deleteUser($id) 
    {
        return $this->successResponse($this->siteService->deleteUser($id));
    }

    // Search user
    public function searchUsers($id)
    {
        return $this->successResponse($this->siteService->showUser($id));
    }
}