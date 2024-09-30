<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    private $teamMember;
    public function index()
    {
        $this->teamMember = TeamMember::where('status',1)->get();
        return view('admin.teamMember.manage',['teamMembers' => $this->teamMember]);
    }
    public function add()
    {
        return view('admin.teamMember.index');
    }
    public function create(Request $request)
    {
        TeamMember::newTeamMember($request);
        return redirect('/team-member')->with('message', 'Team Member Save Successfully');
    }

    public function edit($id)
    {
        $this->teamMember = TeamMember::find($id);
        return view('admin.teamMember.edit',['teamMember' => $this->teamMember]); 

    }
    public function update(Request $request, $id)
    {
        TeamMember::updateTeamMember($request,$id);
        return redirect('/team-member')->with('message', 'Team Member Update Successfully'); 

    }
    public function delete($id)
    {
        TeamMember::deleteTeamMember($id);
        return redirect('/team-member')->with('message', 'Team Member Delete Successfully'); 

    }
}
