<?php

namespace Ajtarragona\Anicom\Models\Requests;

use Ajtarragona\Anicom\Models\AnicomUpdateRequest;

class ModificacioAnimal extends AnicomUpdateRequest 
{
    
   
    
    public function __construct($id_animal,$variables=[])
    {

        // dd($variables);
        $variables=array_merge($variables,[
            'idPk'=>$id_animal."N",
            'nivell'=>46932
        ]);
           
        parent::__construct($variables);
    }
}
