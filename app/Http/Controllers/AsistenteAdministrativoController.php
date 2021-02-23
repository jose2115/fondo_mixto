<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Historial;
use App\Models\Anexo;
use App\Repositories\SolicitudRepository;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Block\Element\Document;

class AsistenteAdministrativoController extends Controller
{

    protected $repository;

    public function __construct(SolicitudRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('auth');
    }

    public function index()
    {
        $documentos=Documento::all(); 
        $docus=Documento::where('categoria', 6)->get();  
        $solicitudes = $this->repository->buildQuery('Verificacion Asistente')->get();

        if (request()->ajax()) {

            $solicitudes = $this->repository->buildQuery('Verificacion Asistente')->get();

            if (count($solicitudes) == 0) {
                return response()->json(['warning' => 'ERROR EN EL SERVIDOR']);
            } else {
                return response()->view('ajax.table-solicitudes-asistenteadmin', compact('solicitudes'));
            }
        }
 
        return view('asistente.index', compact('solicitudes', 'documentos', 'docus'));

    }

    public function show($id)
    {
        if (request()->ajax()) {

            $solicitud = $this->repository->findSolicitudNormal($id);
            $historial=Historial::where('solicitud_id', $id)->get(); 
           // $anexo = Anexo::where('solicitud_id', $id)->get();      
            $solicitus = \DB::select('call anexos(?)',array($id));
            $estudio = \DB::select('call estudio_beneficiencia(?)',array($id));

            if ($solicitud->categoria->tipo_solicitud == 'Proyecto') {

                $solicitud = $this->repository->findSolicitudProject($id);
                $historial=Historial::where('solicitud_id', $id)->get(); 
                //$anexo = Anexo::where('solicitud_id', $id)->get();
                $solicitus = \DB::select('call anexos(?)',array($id));
                $estudio = \DB::select('call estudio_beneficiencia(?)',array($id));
            }

            return response()->view('ajax.detail-asistente', compact('estudio','solicitus','solicitud', 'historial'));
        }


    }

}
