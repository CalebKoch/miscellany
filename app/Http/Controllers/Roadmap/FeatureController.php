<?php

namespace App\Http\Controllers\Roadmap;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\FeatureVote;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function show(Feature $feature)
    {
        return view('roadmap.show')
            ->with('feature', $feature);
    }

    public function upvote(Request $request, Feature $feature)
    {
        $this->middleware('auth');

        /** @var FeatureVote $vote */
        $vote = FeatureVote::where('user_id', auth()->user()->id)
            ->where('feature_id', $feature->id)
            ->firstOrNew();
        if ($vote->exists) {
            $vote->delete();
            $feature->upvote_count--;
            $feature->updateQuietly();
        } else {
            $vote->feature_id = $feature->id;
            $vote->user_id = auth()->user()->id;
            $vote->save();
            $feature->upvote_count++;
            $feature->updateQuietly();
        }

        return view('roadmap.feature._upvote')
            ->with('feature', $feature);
    }
}
