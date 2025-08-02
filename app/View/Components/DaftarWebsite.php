<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use App\Models\Website;
use app\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class DaftarWebsite extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = Website::all();
        return view('components.daftar-website', ['data' => $data]);
    }
}
