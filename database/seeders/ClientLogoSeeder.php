<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ClientLogos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ClientLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = new ClientLogos;
        $data->name = "BPS";
        $data->logo_url = "/assets/images/client/Bps.png";
        $data->logo_path = "/assets/images/client/Bps.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = "al wildan";
        $data->logo_url = "/assets/images/client/al wildan.png";
        $data->logo_path = "/assets/images/client/al wildan.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = "Belle softlens";
        $data->logo_url = "/assets/images/client/Belle softlens.png";
        $data->logo_path = "/assets/images/client/Belle softlens.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = "kementrian kelautan";
        $data->logo_url = "/assets/images/client/kementrian kelautan.png";
        $data->logo_path = "/assets/images/client/kementrian kelautan.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = "Kompas";
        $data->logo_url = "/assets/images/client/Kompas.png";
        $data->logo_path = "/assets/images/client/Kompas.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = "LPI";
        $data->logo_url = "/assets/images/client/LPI.png";
        $data->logo_path = "/assets/images/client/LPI.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = "Pelindo";
        $data->logo_url = "/assets/images/client/Pelindo.png";
        $data->logo_path = "/assets/images/client/Pelindo.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = "Petologi";
        $data->logo_url = "/assets/images/client/Petologi.png";
        $data->logo_path = "/assets/images/client/Petologi.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = "Rolas Pekayon";
        $data->logo_url = "/assets/images/client/Rolas Pekayon.png";
        $data->logo_path = "/assets/images/client/Rolas Pekayon.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = "sevenpack";
        $data->logo_url = "/assets/images/client/sevenpack.png";
        $data->logo_path = "/assets/images/client/sevenpack.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = "SMRI";
        $data->logo_url = "/assets/images/client/SMRI.png";
        $data->logo_path = "/assets/images/client/SMRI.png";
        $data->save();


        $data = new ClientLogos;
        $data->name = 'Adapundi';
        $data->logo_url = "/assets/images/client/adapundi.png";
        $data->logo_path = "/assets/images/client/adapundi.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'Antam Medika';
        $data->logo_url = "/assets/images/client/antamedika.png";
        $data->logo_path = "/assets/images/client/antamedika.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'Asuransi astra';
        $data->logo_url = "/assets/images/client/astra.png";
        $data->logo_path = "/assets/images/client/astra.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'Avolta';
        $data->logo_url = "/assets/images/client/avolta.png";
        $data->logo_path = "/assets/images/client/avolta.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'Bca';
        $data->logo_url = "/assets/images/client/bca.png";
        $data->logo_path = "/assets/images/client/bca.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'Bjb';
        $data->logo_url = "/assets/images/client/bjb.png";
        $data->logo_path = "/assets/images/client/bjb.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'bri';
        $data->logo_url = "/assets/images/client/bri.png";
        $data->logo_path = "/assets/images/client/bri.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'firstmedia';
        $data->logo_url = "/assets/images/client/firstmedia.png";
        $data->logo_path = "/assets/images/client/firstmedia.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'mandiri';
        $data->logo_url = "/assets/images/client/mandiri.png";
        $data->logo_path = "/assets/images/client/mandiri.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'mansion';
        $data->logo_url = "/assets/images/client/mansion.png";
        $data->logo_path = "/assets/images/client/mansion.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'segari';
        $data->logo_url = "/assets/images/client/segari.png";
        $data->logo_path = "/assets/images/client/segari.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'simgroup';
        $data->logo_url = "/assets/images/client/simgroup.png";
        $data->logo_path = "/assets/images/client/simgroup.png";
        $data->save();

        $data = new ClientLogos;
        $data->name = 'lion wings';
        $data->logo_url = "/assets/images/client/lion wings.png";
        $data->logo_path = "/assets/images/client/lion wings.png";
        $data->save();
    }
}
