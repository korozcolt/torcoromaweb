<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupportRequest;
use App\Http\Requests\UpdateSupportRequest;
use App\Models\Support;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\IpUtils;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.support.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSupportRequest $request
     * @return RedirectResponse
     */
    public function store(StoreSupportRequest $request): RedirectResponse
    {
        $verificationResult = $this->verifyCaptcha($request);

        if ($verificationResult) {
            $support = Support::create($request->validated());
            $support->id_pqr = $support->generateUniqueRandomIdPqr();
            $support->save();
            Alert::success('PQRS Enviado','Mensaje enviado exitosamente con el número de ticket: '.$support->id_pqr.'.');

            return back();
        } else {
            return redirect()->back()->with('status', 'Recaptcha verification failed, please try again.');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Support $support
     * @return Application|Factory|View
     */
    public function edit(Support $support)
    {
        return view('admin.support.edit', compact('support'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSupportRequest $request
     * @param Support $support
     * @return RedirectResponse
     */
    public function update(UpdateSupportRequest $request, Support $support): RedirectResponse
    {
        $support->fill($request->validated())->save();
        Alert::success('PQRS Actualizado','Mensaje actualizado exitosamente');

        return redirect()->route('support.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Support $support
     * @return RedirectResponse
     */
    public function destroy(Support $support)
    {
        $support->delete();
        Alert::success('PQRS Eliminado','Mensaje eliminado exitosamente');

        return redirect()->route('support.index');
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function verifyStatus(int $id): \Illuminate\Http\JsonResponse
    {
        $support = Support::where('id_pqr', $id)->firstOrFail();
        //return json response for ajax request
        return response()->json($support);
    }

    //recaptcha verification function

    /**
     * @param StoreSupportRequest $request
     * @return bool
     */
    public function verifyCaptcha(StoreSupportRequest $request): bool
    {
        $recaptcha_response = $request->input('g-recaptcha-response');

        if (is_null($recaptcha_response)) {
            return false;
        }

        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

        $body = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha_response,
            'remoteip' => IpUtils::anonymize($request->ip())
        ];

        $response = Http::asForm()->post($recaptcha_url, $body);
        $result = json_decode($response);

        return $response->successful() && $result->success;
    }
}
