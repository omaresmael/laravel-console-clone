<?php

namespace Illuminate\Console\Commands;

use Illuminate\Console\Command;

class InspireCommand extends Command
{
    protected $name = 'inspire';

    protected $description = 'Get a Verse of QURAN';

    public function handle()
    {
        $ayah =  rand(1,6236);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://api.alquran.cloud/v1/ayah/$ayah/en.asad");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = json_decode(curl_exec($ch));
        curl_close($ch);
        $this->info($output->data->text);
    }


}