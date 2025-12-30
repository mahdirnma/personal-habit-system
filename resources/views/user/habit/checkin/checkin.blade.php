@extends('layout.app')
@section('title')
    checkin habit
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">checkin {{$habit->title}}</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('habit.status',compact('habit'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-[45%] h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="status" class="font-semibold ml-5">: checkin status</label>
                            <select name="status" id="status" class="w-2/5 h-8 rounded outline-0 px-2 border border-gray-400">
                                <option value="done">done</option>
                                <option value="skipped">skipped</option>
                            </select>
                            @error('status')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Checkin" class="absolute bottom-2 -left-28 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-[55%] h-full flex flex-col items-end pr-10">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="note" class="font-semibold ml-5">: note</label>
                            <textarea name="note" id="note" cols="30" rows="10" class="w-2/5 h-36 rounded outline-0 p-2 border border-gray-400">{{old('note')}}</textarea>
                            @error('note')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
