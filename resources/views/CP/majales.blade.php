@extends("CP.layout.layout")

@section("content")
    <div class="container">
        <div class="row">
            @forelse($majales as $item)
                <div class="col-sm-6 col-12 mb-sm-5 mb-4">
                    <div class="jumbotron h-100 m-0">
                        <h5 class="font-weight-bold">
                            <i class="fa fa-user"></i>
                            {{$item->user->name}}
                        </h5>
                        <p class="font-weight-normal">
                            <i class="fa fa-calendar-alt"></i>
                            {{$item->datetime}}
                        </p>
                        <p class="lead text-justify">{{$item->description}}</p>

                        <button class="btn btn-success" data-action="active" data-id="{{$item->id}}">
                            {{trans("cp_words.btn_active")}}
                        </button>
                        <button class="btn btn-primary" data-action="reject" data-id="{{$item->id}}">
                            {{trans("cp_words.btn_reject")}}
                        </button>
                        <button class="btn btn-danger"  data-action="delete" data-id="{{$item->id}}">
                            {{trans("cp_words.btn_delete")}}
                        </button>
                    </div>
                </div>
            @empty
                <div class="col-12 mb-sm-5 mb-4">
                    <div class="jumbotron m-0">
                        <h2 class="text-center my-5">
                            {{trans("cp_words.message_not_found")}}
                        </h2>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection

@section("script")

@endsection