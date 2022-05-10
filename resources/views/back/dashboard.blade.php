@extends("back.layouts.app")
@section("content")

    
        <h1>Coucou, je suis la page admin</h1>
        <div>
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            

             
       

@endsection
