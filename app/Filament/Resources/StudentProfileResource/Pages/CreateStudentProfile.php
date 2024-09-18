<?php

namespace App\Filament\Resources\StudentProfileResource\Pages;

use App\Filament\Resources\StudentProfileResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStudentProfile extends CreateRecord
{
    protected static string $resource = StudentProfileResource::class;

    // protected static ?string $navigationLabel = 'My Students';
}
