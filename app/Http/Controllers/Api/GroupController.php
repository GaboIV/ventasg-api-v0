<?php

namespace App\Http\Controllers\Api;

use App\Group;
use Illuminate\Http\Request;
use App\Http\Requests\GrupoRequest;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\ApiController;

class GroupController extends ApiController
{
    public function index()
    {
        $modeloGrupo = new Group();

        if (request()->has('orden')) {
            $attribute = request()->orden;
            $nombreCols = Schema::hasColumn($modeloGrupo->getTable(), $attribute);
            if (!$nombreCols) $attribute = 'description';
        } else {
            $attribute = 'description';
        }

        $grupos = Group::orderBy($attribute)
            ->paginate(30);

        $data = array(
            'orden' => $attribute,
            'data' => $grupos
        );

        return $this->successResponse($data, 200);
    }

    public function store(GrupoRequest $request)
    {
        $data = $request->all();
        $grupo = Grupo::create($data);
        return $this->successResponse($grupo, 201);
    }

    public function show($id)
    {
        $grupo = Grupo::find($id);

        if (is_object($grupo)) {
            return $this->successResponse($grupo, 200);
        } else {
            return $this->errorResponse('El grupo que intenta ver no existe', 400);
        }
    }

    public function update(Request $request, $id)
    {
        $grupo = Grupo::find($id);

        if ($grupo != null) {
            $grupo->update($request->all());
            return $this->successResponse($grupo, 200);
        }

        return $this->errorResponse('El grupo que intenta actualizar no existe', 400);
    }

    public function destroy($id)
    {
        $grupo = Grupo::where('id', $id)->first();

        if ($grupo != null) {
            $grupo->delete();
            return $this->successResponse($grupo, 200);
        }

        return $this->errorResponse('El grupo que intenta eliminar no existe', 400);
    }
}
