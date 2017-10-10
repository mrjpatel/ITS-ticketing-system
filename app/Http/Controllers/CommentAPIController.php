<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;


class CommentAPIController extends Controller
{
//    Fetching Comments from table
    public function fetch(){

        $comments= Comments::all();
        return $comments;
    }

//    Fetching Comments from table
    public function index() {
        $comments= Comments::all();
        return $comments;
    }

//    Storing Comments to the table
    public function store(Request $request)
    {
        try {
            $comments = new Comments;
            $comments->ticketID = $request->ticketID;
            $comments->description = $request->description;
            $saved = $comments->save();
            if(!$saved){
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }
        return array("status" => "SUCCESS");
    }

//    Showing the Comments
    public function show($id)
    {
        $comments = Comments::find($id);
        return $comments;
    }

//    Updating the Comments in the table from API
    public function update(Request $request, $id)
    {
        try {
            $comments = Comments::find($id);
            $comments->description = $request->description;
            $saved = $comments->save();
            if(!$saved){
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }
        return array("status" => "SUCCESS");;
    }

//    Deleting Comments
    public function destroy($id)
    {
        try {
            $comments = Comments::find($id);
            if ($comments != null) {
                $comments->delete();
            } else {
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }
        return array("status" => "SUCCESS");;
    }
}
