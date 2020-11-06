<?php

use Illuminate\Database\Seeder;

use App\Models\Requirement\Requirement; 

class RequirementTraceabilityMatrixes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$reqDoc = Requirement::where('sid', 'R001')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Halaman antarmuka aplikasi', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R002')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Menu layanan pada aplikasi', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R003')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Halaman form aplikasi', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R004')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Dokumen perencanaan proyek', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R005')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Soft launching aplikasi', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R006')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Launching aplikasi', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R007')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Aplikasi berada pada Mandiri Facebook Page', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R008')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Menu dan fitur tersedia dalam aplikasi dan bisa digunakan dengan baik', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R009')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Dokumen lesson learn sesuai requirment', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R010')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Dokumen roadmap sesuai requirement', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R011')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Dokumen desain teknis', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R012')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Dokumen hail verifikasi', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R013')->first(); 
    	$reqDoc->update([
    		'business_objective' => '\na', 
    		'deliverable' => '\na', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R014')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Sesuai requirement', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R015')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Sesuai requirement', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R016')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Paling tidak 50% requirement tersebut dipenuhi', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R017')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Dokumentasi potensi dependensi dibuat dan diverifikasi oleh Team Operasi', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R018')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Sesuai requirement', 
    	]);

    	$reqDoc = Requirement::where('sid', 'R019')->first(); 
    	$reqDoc->update([
    		'business_objective' => 'Peningkatan 12% pelanggan baru & 5% pelayanan pelanggan', 
    		'deliverable' => 'Sesuai requirement', 
    	]);
    }
}
