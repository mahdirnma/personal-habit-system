@extends('layout.app')
@section('title')
    add habit
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add habit</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('habits.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-[45%] h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: title</label>
                            <input type="text" name="title" value="{{old('title')}}" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('title')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="description" class="font-semibold ml-5">: description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">{{old('description')}}</textarea>
                            @error('description')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="scheduled_time" class="font-semibold ml-5">: scheduled time</label>
                            <input type="time" name="scheduled_time" value="{{old('scheduled_time')}}" id="scheduled_time" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('scheduled_time')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="deadline" class="font-semibold ml-5">: deadline</label>
                            <input type="date" name="deadline" value="{{old('deadline')}}" id="deadline" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('deadline')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>

                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-[55%] h-full flex flex-col items-end pr-10">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="remind_at" class="font-semibold ml-5">: remind time</label>
                            <input type="time" name="remind_at" value="{{old('remind_at')}}" id="remind_at" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('remind_at')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="frequency" class="font-semibold ml-5">: frequency</label>
                            <select name="frequency" id="frequency" class="w-2/5 h-8 rounded outline-0 px-2 border border-gray-400">
                                <option value="daily">daily</option>
                                <option value="weekly">weekly</option>
                            </select>
                            @error('frequency')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="category_id" class="font-semibold ml-5">: category</label>
                            <select name="category_id" id="category_id" class="w-2/5 h-8 rounded outline-0 px-2 border border-gray-400">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <div>
                                <input type="checkbox" name="weekday[]" id="saturday" value="6">
                                <label for="saturday" class="font-semibold">: saturday</label>
                            </div>
                            <div>
                                <input type="checkbox" name="weekday[]" id="sunday" value="0">
                                <label for="sunday" class="font-semibold">: sunday</label>
                            </div>
                            <div>
                                <input type="checkbox" name="weekday[]" id="monday" value="1">
                                <label for="monday" class="font-semibold">: monday</label>
                            </div>
                            <div>
                                <input type="checkbox" name="weekday[]" id="monday" value="2">
                                <label for="monday" class="font-semibold">: tuesday</label>
                            </div>
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <div>
                                <input type="checkbox" name="weekday[]" id="wednesday" value="3">
                                <label for="wednesday" class="font-semibold">: wednesday</label>
                            </div>
                            <div>
                                <input type="checkbox" name="weekday[]" id="thursday" value="4">
                                <label for="thursday" class="font-semibold">: thursday</label>
                            </div>
                            <div>
                                <input type="checkbox" name="weekday[]" id="friday" value="5">
                                <label for="friday" class="font-semibold">: friday</label>
                            </div>
                            @error('weekday[]')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
