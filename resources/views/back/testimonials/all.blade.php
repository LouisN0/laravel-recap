@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Testimonials</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        

        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>Nom</th>
					<th scope='col'>date</th>
                    <th scope='col'>categorie</th>
                    <th scope='col'>rating</th>
                    <th scope='col'>commentaire</th>
                    <th scope='col'>taff</th>
                    <th scope='col'>image</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <td scope='row'>{{ $testimonial->id }}</td>
						<td>{{ $testimonial->nom }}</td>
                        <td>{{ $testimonial->date }}</td>
                        <td>{{ $testimonial->categorie }}</td>
                        <td>{{ $testimonial->rating }}</td>
                        <td>{{ $testimonial->commentaire }}</td>
                        <td>{{ $testimonial->taff }}</td>
                        <td>{{ $testimonial->image }}</td>
                        {{-- <td>
                            @if ($testimonial->status == 0)
                                <span class=''>Pending</span>
                            @else
                                <span class=''>Published</span>
                            @endif
                        </td> --}}
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                {{-- @can('delete', $testimonial) --}}
                                    <form action='{{ route('testimonial.destroy', $testimonial->id) }}' method='post'>
                                        @csrf
                                        @method('delete')
                                        <button class='btn btn-danger mx-1' type=submit>Delete</button>
                                    </form>      
                                {{-- @endcan --}}
                                {{-- @can('update', $testimonial) --}}
                                    <a class='btn btn-primary mx-1' href='{{ route('testimonial.edit', $testimonial->id) }}' role='button'>Edit</a>     
                                {{-- @endcan --}}
                                <a class='btn btn-primary mx-1' href='{{ route('testimonial.show', $testimonial->id) }}' role='button'>Read</a>
                                {{-- @if (Auth::user()->role_id == 1)
                                    @if ($testimonial->status == 0)
                                        <form action='{{ route('testimonial.publish', $testimonial->id) }}' method='post'>
                                            @csrf
                                            <button class='btn btn-success mx-1' type=submit>Publish</button>
                                        </form>
                                    @else
                                        <form action='{{ route('testimonial.unpublish', $testimonial->id) }}' method='post'>
                                            @csrf
                                            <button class='btn btn-warning mx-1' type=submit>Unpublish</button>
                                        </form>
                                    @endif
                                    
                                @endif
                            </div> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection
