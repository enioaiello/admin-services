<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

return new class extends Migration {
    public function up(): void
    {
        // Chemin vers le fichier SQL
        $sqlFile = database_path('sql/database.sql');

        // Vérifie si le fichier existe avant l'importation
        if (File::exists($sqlFile)) {
            DB::unprepared(File::get($sqlFile));
        } else {
            throw new Exception("Le fichier SQL est introuvable : " . $sqlFile);
        }
    }

    public function down(): void
    {

    }
};
