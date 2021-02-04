<?php

namespace Ebess\AdvancedNovaMediaLibrary\Http\Controllers;

use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DownloadMediaController extends Controller
{
    public function show(Request $request, Media $media)
    {
        $user = $request->user();
        if($user->can('See attachments')) {
            return $media;
        }
        return null;
    }
}
