<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;

trait HandlesHtmxRequests
{
    /**
     * If the request comes from HTMX, return the partial without the layout.
     */
    public function handleHtmxRequest(
        Request $request,
        string $viewName,
        array $data = [],
        string $layoutName = 'app',
    ) {
        /*
        if ($request->header('Hx-Request') === 'true') {
            return view('partials.'.$viewName, $data);
        }
         */

        // Get the first part of the view name and use it as the title
        $title = explode('.', $viewName)[0];
        $title = ucwords(str_replace('-', ' ', $title));

        return view('layouts.'.$layoutName, array_merge([
            'title' => $title,
            'content' => view('partials.'.$viewName, $data)->render(),
        ], $data));
    }
}


