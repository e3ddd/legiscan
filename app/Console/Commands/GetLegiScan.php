<?php

namespace App\Console\Commands;

use App\Models\Committe;
use App\Models\LegiScanInfo;
use http\Exception\RuntimeException;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GetLegiScan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'legiscan:get-query-from-legiscan {api_key} {state} {query}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Getting by query and state info from LegiScan';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://api.legiscan.com/?key=' . $this->argument('api_key') . '&op=getSearch&state=' . $this->argument('state') . '&query=' . $this->argument('query'));

        if($response === null) {
            throw new RuntimeException('Not Found !');
        }

        foreach ($response->json()['searchresult'] as $key => $item){
            if($key !== 'summary'){
                $item['query'] = strtolower($this->argument('query'));
                LegiScanInfo::create($item);
            }
        }
    }
}
