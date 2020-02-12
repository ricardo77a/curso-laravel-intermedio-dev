<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Becario;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportarBecariosExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	$becarios = Becario::inRandomOrder()->get()->take(50);
    	//dd($becarios);
    	return $becarios;
    }


	public function headings(): array
    {
        return [
            'Id',
            'Apellido Paterno',
            'Apellido Materno',
            'Nombre',
            'Área del conocimiento',
            'Nivel',
            'Institución',
            'Entidad destino',
            'Sexo',
        ];
    }    
}
