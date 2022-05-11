@extends('back.layouts.app')
@section('content')
    <section id='multiple-column-form'>
        <div class='page-heading'>
            <h3>Banner Edit</h3>
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
                            <form class='form' action='{{ route('banner.update', $banner->id) }}' method='post' enctype="multipart/form-data">
                                @csrf
                                <div class='row'>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-titre-column'>titre</label>
											<input type='text' id='first-titre-column' class='form-control' name='titre' value='{{ $banner->titre }}'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-sstitre-column'>sstitre</label>
											<input type='text' id='first-sstitre-column' class='form-control' name='sstitre' value='{{ $banner->sstitre }}'>
										</div>
									</div>
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-appleTitre-column'>appleTitre</label>
											<input type='text' id='first-appleTitre-column' class='form-control' name='appleTitre' value='{{ $banner->appleTitre }}'>
										</div>
									</div>
                                    <div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-applelien-column'>applelien</label>
											<input type='text' id='first-applelien-column' class='form-control' name='applelien' value='{{ $banner->applelien }}'>
										</div>
									</div>
                                    <div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-androidTitre-column'>androidTitre</label>
											<input type='text' id='first-androidTitre-column' class='form-control' name='androidTitre' value='{{ $banner->androidTitre }}'>
										</div>
									</div>
                                    <div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-androidlien-column'>androidlien</label>
											<input type='text' id='first-androidlien-column' class='form-control' name='androidlien' value='{{ $banner->androidlien }}'>
										</div>
									</div>
                                    
									<div class='col-md-6 col-12'>
										<div class='form-group'>
											<label for='first-img-column'>img</label>
											<input class="form-control" name='img' type="file" id="formFile">
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
