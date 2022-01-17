<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::all();
        return view('booking.index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            ['kode_booking' => 'required',
             'tgl_booking' => 'required',
             'tgl_mulai' => 'required',
             'tgl_selesai' => 'required',
             'tgl_kembali' => 'required',
             'denda' => 'required',
             'durasi' => 'required',
             'status_booking' => 'required',
             'jml_bayar' => 'required',
             'jml_dp' => 'required',
            ]);

        $booking = new Booking;
        $booking->kode_booking= $request->kode_booking;
        $booking->tgl_booking = $request->tgl_booking;
        $booking->tgl_mulai = $request->tgl_mulai;
        $booking->tgl_selesai = $request->tgl_selesai;
        $booking->tgl_kembali = $request->tgl_kembali;
        $booking->denda = $request->denda;
        $booking->durasi = $request->durasi;
        $booking->status_booking = $request->status_booking;
        $booking->jml_bayar = $request->jml_bayar;
        $booking->jml_dp = $request->jml_dp;




        $booking->save();
        return redirect()->route('booking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.show', compact('booking'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            ['kode_booking' => 'required',
            'tgl_booking' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'tgl_kembali' => 'required',
            'denda' => 'required',
            'durasi' => 'required',
            'status_booking' => 'required',
            'jml_bayar' => 'required',
            'jml_dp' => 'required',
            ]);

            $booking = new Booking;
            $booking->kode_booking= $request->kode_booking;
            $booking->tgl_booking = $request->tgl_booking;
            $booking->tgl_mulai = $request->tgl_mulai;
            $booking->tgl_selesai = $request->tgl_selesai;
            $booking->tgl_kembali = $request->tgl_kembali;
            $booking->denda = $request->denda;
            $booking->durasi = $request->durasi;
            $booking->status_booking = $request->status_booking;
            $booking->jml_bayar = $request->jml_bayar;
            $booking->jml_dp = $request->jml_dp;

        $booking->save();
        return redirect()->route('booking.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking= Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('booking.index');
    }
}
