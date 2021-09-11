<?php

namespace App\Http\Controllers\Admin;

use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Session;

/**
 * Class InboxController
 * @package App\Http\Controllers
 */
class InboxController extends Controller
{
    public function __construct()
    {

        if(!Session::has('usr_id')) return redirect()->route('admin.login.index')->send();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inboxes = Inbox::paginate();

        return view('admin.pages.inbox.index', compact('inboxes'))
            ->with('i', (request()->input('page', 1) - 1) * $inboxes->perPage());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inbox = new Inbox();
        return view('admin.pages.inbox.create', compact('inbox'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inbox::$rules);

        $inbox = Inbox::create($request->all());

        return redirect()->route('inboxes.index')
            ->with('success', 'Inbox created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inbox = Inbox::find($id);

        return view('admin.pages.inbox.show', compact('inbox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inbox = Inbox::find($id);

        return view('admin.pages.inbox.edit', compact('inbox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inbox $inbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inbox $inbox)
    {
        request()->validate(Inbox::$rules);

        $inbox->update($request->all());

        return redirect()->route('inboxes.index')
            ->with('success', 'Inbox updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inbox = Inbox::find($id)->delete();

        return redirect()->route('inboxes.index')
            ->with('success', 'Inbox deleted successfully');
    }
}
