<?php

namespace App\Http\Controllers;

use App\Models\ShortenUrl;
use App\Helper\Base62;
use App\Helper\Domain;
use Illuminate\Http\Request;

class ShortenUrlController extends Controller
{
    public function create(Request $request)
    {
        $shortenUrl = ShortenUrl::firstWhere('long_url', $request->get('q'));
        if ($shortenUrl) {
            return response()->json($shortenUrl->short_url);
        }

        $len = strpos($request->get('q'), '.ee/') + 4;

        $domain = substr($request->get('q'), 0, $len);

        $shortUrl = Domain::encode($domain);
        if (!$shortUrl) {
            return response()->json(['message' => 'Invalid postimees.ee domain name!'], 404);
        }

        $url = new ShortenUrl([
            'long_url' => $request->get('q'),
        ]);

        $url->save();

        $shortUrl .= Base62::encode($url->id);

        $url->short_url = $shortUrl;
        $url->update();

        return response()->json($shortUrl);
    }

    public function get(Request $request)
    {
        $url = $request->get('q');
        $pos = strpos($url, '.ee/');
        $pos += 4;

        $base62Id = substr($url, $pos);
        $id = Base62::decode($base62Id);

        if ($id === null) {
            return response()->json(['message' => 'Invalid short url!'], 404);
        }

        $shortenUrl = ShortenUrl::find($id);
        if (!$shortenUrl) {
            return response()->json(['message' => 'Invalid short url!'], 404);
        }
        return response()->json($shortenUrl->long_url);
    }
}
