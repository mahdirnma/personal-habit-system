@extends('layout.app')
@section('title')
    habits checkins
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <h2 class="text-xl">habits checkins</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">note</td>
                        <td class="text-center">status</td>
                        <td class="text-center">checkin time</td>
                        <td class="text-center">checkin date</td>
                        <td class="text-center">description</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($habitCheckins as $habit)
                        <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                            <td class="text-center">{{$habit->notes}}</td>
                            <td class="text-center">
                                @if($habit->status=='done')
                                    <span class="text-green-600 text-lg font-bold">done</span>
                                @elseif($habit->status=='pending')
                                    <span class="text-red-900 text-lg font-bold">pending</span>
                                @endif
                            </td>
                            <td class="text-center">{{$habit->checked_in_at}}</td>
                            <td class="text-center">{{$habit->for_date}}</td>
                            <td class="text-center">{{$habit->habit->description}}</td>
                            <td class="text-center">{{$habit->habit->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$habitCheckins->links()}}</div>
        </div>
@endsection
