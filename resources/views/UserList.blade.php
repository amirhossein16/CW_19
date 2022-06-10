@extends('layouts.main')
@section('content')
    <div class="flex justify-around mt-56 mb-4">
        @foreach($User as $user)
            <div class="max-w-sm bg-white
        rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2"><span
                            class="text-xs text-gray-400">first name :</span> {{$user->first_name}}
                    </div>
                    <div class="font-bold text-xl mb-2"><span
                            class="text-xs text-gray-400">last name :</span> {{$user->last_name}}
                    </div>
                    <p class="text-gray-700 text-base">
                        <span class="text-xs text-gray-400">Full name :</span> {{$user->FullName}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><span
                        class="text-xs text-gray-400">City : </span> {{$user->city}}</span>
                    <a href="{{route('Form.show',$user->id)}}"
                       class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold mr-2 mb-2"><span
                            class="text-xs text-blue-800">Read More</span></a>
                </div>
            </div>
        @endforeach
    </div>
    {{$User->onEachSide(1)->links()}}
@endsection
