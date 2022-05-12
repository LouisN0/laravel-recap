@extends('back.layouts.app')
@section('content')
    <section id='multiple-column-form'>
        <div class='page-heading'>
            <h3>Testimonial Edit</h3>
        </div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul class='mb-0'>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class='row match-height'>
            <div class='col-12'>
                <div class='card'>
                    <div class='card-content'>
                        <div class='card-body'>
                            <form class='form' action='{{ route('testimonial.update', $testimonial->id) }}' method='post' enctype='multipart/form-data'>
                                @csrf
                                @method('PUT')
                                <div class='row'>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-nom-column'>Nom</label>
											<input type='text' id='first-nom-column' class='form-control' name='nom' value='{{ $testimonial->nom }}'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-date-column'>date</label>
											<input type='text' id='first-date-column' class='form-control' name='date' value='{{ $testimonial->date }}'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-categorie-column'>categorie</label>
											<input type='text' id='first-categorie-column' class='form-control' name='categorie' value='{{ $testimonial->categorie }}'>
										</div>
									</div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='first-rating-column'>rating</label>
                                            <input type='text' id='first-rating-column' class='form-control' name='rating' value='{{ $testimonial->rating }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='first-commentaire-column'>commentaire</label>
                                            <input type='text' id='first-commentaire-column' class='form-control' name='commentaire' value='{{ $testimonial->commentaire }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for='first-taff-column'>taff</label>
                                            <input type='text' id='first-taff-column' class='form-control' name='taff' value='{{ $testimonial->taff }}'>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-12'>
                                        <div class='form-group'>
                                            <label for="formFile" class="form-label">Image</label>
	                                        <input class="form-control" name='image' type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class='col-12 d-flex justify-content-end'> {{-- edit_blade_anchor --}}
                                       <button type='submit' class='btn btn-primary me-1 mb-1'>Submit</button>
                                        <button type='reset' class='btn btn-light-secondary me-1 mb-1'>Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
