<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\ApiController;
use App\Http\Requests\SystemParameterRequest;
use App\Http\Resources\PermissionResource;
use App\Http\Resources\SystemParameterResource;
use App\SystemParameter;
use Illuminate\Http\Request;

class SystemParameterController extends ApiController
{
    protected $repository;

    public function __construct(SystemParameter $repository) { 
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = $this->repository->filterByColumns($request->all());

        $collection = $query->orderBy('group', 'asc')
                      ->get();

        foreach($collection as $element) { 
            $groups[$element->group][] = new SystemParameterResource($element);
        }

        return $this->responseOk($groups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SystemParameterRequest $request)
    {
        $data = $request->validated();

        try {           
            $system_parameter = $this->repository->create($data);
            return $this->responseCreate(new SystemParameterResource($system_parameter));
        } catch (\Exception $e) {
            return $this->responseException($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $query = $this->repository->filterByColumns($request->all());

        $collection = $query->orderBy('group', 'asc')
                      ->whereGroup($id)
                      ->get();

        return SystemParameterResource::collection($collection)
        ->additional(['status' => 200]);

        foreach($collection as $element) { 
            $groups[$element->group][] = new SystemParameterResource($element);
        }

        return $this->responseOk($groups);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SystemParameterRequest $request, $id)
    {
        $data = $request->validated();

        try {      
            $system_parameter = $this->repository->whereId($id)->first();
            $system_parameter->update($data);

            return $this->responseOk(new SystemParameterResource($system_parameter));
        } catch (\Exception $e) {
            return $this->responseException($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = $this->repository->findOrFail($id);

        try {
            $client->delete();
            return $this->responseOk(true);
        } catch (\Exception $e) {
            return $this->responseException($e);
        }
    }

    public function toggleStatus($id){
        $system_parameter = $this->repository->findOrFail($id);

        try {
            $system_parameter->update([
                'active' => !$system_parameter->active
            ]);
           
            return $this->responseOk([
                'active' => $system_parameter->active
            ]);
        } catch (\Exception $e) {
            return $this->responseException($e);
        }
    }
}
