<?php

namespace App\Http\Requests\Quote;

use App\Http\Requests\Request;
use App\Models\Quote;

class ShowQuoteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize() : bool
    {
        return auth()->user()->can('view', $this->quote);
    }

}