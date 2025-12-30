@extends('layout.app')
@section('title')
    habits
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('habits.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add habit +</a>
{{--
                <form action="{{route('routines.index')}}" method="get" class="w-2/4 flex flex-row-reverse justify-center gap-x-7">
                    @csrf
                    <select name="interval_type" id="interval_type" class="w-52 h-10 rounded border pl-2">
                        <option value="all">all</option>
                        <option value="daily">daily</option>
                        <option value="weekly">weekly</option>
                    </select>
                    <button type="submit" class="rounded-2xl w-32 h-10 cursor-pointer bg-gray-200">show</button>
                </form>
--}}
                <h2 class="text-xl">habits</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">status</td>
                        <td class="text-center">category</td>
                        <td class="text-center">frequency</td>
                        <td class="text-center">remind at</td>
                        <td class="text-center">deadline</td>
                        <td class="text-center">schedule time</td>
                        <td class="text-center">description</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($habits as $habit)
                        <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                            <td class="text-center">
                                <form action="{{route('habit.status.form',$habit->habit)}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600 cursor-pointer">change status</button>
                                </form>
                            </td>
                            <td class="text-center">{{$habit->habit->category->name}}</td>
                            <td class="text-center">{{$habit->habit->frequency}}</td>
                            <td class="text-center">{{$habit->habit->remind_at}}</td>
                            <td class="text-center">{{$habit->habit->due_at}}</td>
                            <td class="text-center">{{$habit->habit->scheduled_time}}</td>
                            <td class="text-center">{{$habit->habit->description}}</td>
                            <td class="text-center">{{$habit->habit->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$habits->links()}}</div>
        </div>
@endsection
