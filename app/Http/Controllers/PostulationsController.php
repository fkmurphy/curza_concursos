<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostulationsController extends Controller
{
    public function get(Request $request)
    {
        return response()->json([
            'data' => [
                [
                    'id' => 1,
                    'title' => 'Llamado a concurso virtual para cargo...',
                    'departament' => 'Estudios políticos',
                    'area' => 'Politica',
                    'orientation' => 'Teoría política contemporanea',
                    'course' => 'Política internacional',
                    'qty_positions' => 1,
                    'position_category' => 'AYP-3 Suplente',
                    'dedication' => 'Simple',
                    'requirements' => '<ul><li>Solicitud de inscripción. Para ello deberán descargar y completar la planilla de inscripción a concurso disponible en</li><li>Titulo universitario</li></ul>', 
                    'footer_data' => 'Toda la documentación solicitada deberá enviarse, al correo electrónico del Departamento Docente, en un único documento y con formato de documento portable (PDF).',
                    'contact_data' => '<ul><li>Académica</li><li>Depto de estudios</li><li>Depto docente</li></ul>'
                ],
                [
                    'id' => 2,
                    'title' => 'Llamado a concurso virtual para cargo XXX...',
                    'departament' => 'Estudios informaticos',
                    'area' => 'Alcaparras',
                    'orientation' => 'Alguna orientación',
                    'course' => 'Introducción a teclas de plástico',
                    'qty_positions' => 2,
                    'position_category' => 'AYP-53 Vicesuplente',
                    'dedication' => 'Compleja',
                    'requirements' => '<ul><li>Solicitud de inscripción. Para ello deberán descargar y completar la planilla de inscripción a concurso disponible en</li><li>Titulo universitario</li></ul>', 
                    'footer_data' => 'Toda la documentación solicitada deberá enviarse, al correo electrónico del Departamento Docente, en un único documento y con formato de documento portable (PDF).',
                    'contact_data' => '<ul><li>Académica</li><li>Depto de estudios</li><li>Depto docente</li></ul>'
                ]
            ],
        ]);
    }

    public function view(Request $request, $id)//Postulation $postualtion)
    {
        return response()->json([
            'data' => [
                'id' => 1,
                'title' => 'Llamado a concurso virtual para cargo XXX...',
                'departament' => 'Estudios informaticos',
                'area' => 'Alcaparras',
                'orientation' => 'Alguna orientación',
                'course' => 'Introducción a teclas de plástico',
                'qty_positions' => 2,
                'position_category' => 'AYP-53 Vicesuplente',
                'dedication' => 'Compleja',
                'requirements' => '<ul><li>Solicitud de inscripción. Para ello deberán descargar y completar la planilla de inscripción a concurso disponible en</li><li>Titulo universitario</li></ul>', 
                'footer_data' => 'Toda la documentación solicitada deberá enviarse, al correo electrónico del Departamento Docente, en un único documento y con formato de documento portable (PDF).',
                'contact_data' => '<ul><li>Académica</li><li>Depto de estudios</li><li>Depto docente</li></ul>'
            ]
        ]);
    }
}
