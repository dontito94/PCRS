<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caseregister extends Model
{
    protected $table='caseregister';

    protected $fillable=['id','casename','casecode','victimName','victimemail','victimphoneNo','criminalName','criminalemail','criminalphoneNo','witnessName','witnessemail','witnessphoneNo'];
}
