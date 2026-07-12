<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Cek apakah field sudah ada sebelum menambah
            if (!Schema::hasColumn('users', 'preferensi_rasa')) {
                $table->string('preferensi_rasa')->nullable()->after('password');
            }
            if (!Schema::hasColumn('users', 'nomor_whatsapp')) {
                $table->string('nomor_whatsapp')->nullable()->after('preferensi_rasa');
            }
            if (!Schema::hasColumn('users', 'alamat')) {
                $table->text('alamat')->nullable()->after('nomor_whatsapp');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['preferensi_rasa', 'nomor_whatsapp', 'alamat']);
        });
    }
};