@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <form method="post" action="{{url('magazines/' . $magazine->id . '/update')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$magazine->id}}">
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Magazine Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Type name here" value="{{old('name',$magazine->name)}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Publication Date</label>
                                <input type="text" class="form-control" id="datepicker" name="publication_date" placeholder="date" value="{{old('name',$magazine->publication_date)}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="language">Magazine Language</label>
                                <select id="language" name="language_id" class="form-control">
                                    @foreach(\App\Language::all() as $lang)
                                        <option {{ $lang->id == $magazine->language->id ? 'selected' : '' }} value="{{$lang->id}}">{{$lang->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Category">Magazine Category</label>
                                <select id="Category" name="category_id" class="form-control">
                                    @foreach(\App\Category::all() as $cat)
                                        <option {{ $cat->id == $magazine->category->id ? 'selected' : '' }} value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="magazine-item" style="padding: 20px;max-width: 150px">
                                <img src="{{url('uploads/covers/'.$magazine->id.'.jpg')}}" class="img-responsive">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputFile">Magazine Image Cover</label>
                                <input type="file" name="img_file">
                                <p class="help-block">Only JPG, JPEG, PNG files.</p>
                            </div>
                        </div>
                    </div>
                    @foreach($magazine->links as $link)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="link_1">Link</label>
                                    <input type="text" class="form-control" name="links[]" placeholder="url" value="{{ $link->url }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link_1">Link</label>
                                <input type="text" class="form-control" name="links[]" placeholder="url">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link_1">Link</label>
                                <input type="text" class="form-control" name="links[]" placeholder="url">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link_1">Link</label>
                                <input type="text" class="form-control" name="links[]" placeholder="url">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link_1">Link</label>
                                <input type="text" class="form-control" name="links[]" placeholder="url">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link_1">Link</label>
                                <input type="text" class="form-control" name="links[]" placeholder="url">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="link_1">Link</label>
                                <input type="text" class="form-control" name="links[]" placeholder="url">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Update Magazine</button>
                </form>
            </div>
        </div>
    </div>
@endsection