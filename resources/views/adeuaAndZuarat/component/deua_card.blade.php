


<div class="col-md-6 pb-4">
    <div class=" p-0 shadow-special majales-zuarat card-majales-zuarat">
        <div class="mt-3 p-3 zuarat">
            <h3 id="tit-{{$titleID}}">{{$title}}</h3>
            <p id="cont-{{$contentID}}" class="module-text fade-text">{{$content}}</p>
            <button class="btn btn-primary btn-sm rounded" type="button" data-toggle="collapse"
                    data-target="#collapse-{{$readingCollapseID}}" aria-expanded="false"
                    aria-controls="collapseExample">{{$listenTrans}}
            </button>
            <button class="btn btn-secondary btn-sm rounded read-more"
                    value="{{$btnReadingValue}}" data-toggle="modal"
                    data-target=".exampleModalLong">{{$readingTrans}}
            </button>
        </div>
        <div class="collapse p-3" id="collapse-{{$listenCollapseID}}">
            <audio controls class="w-100">
                <source src="{{$sound}}" type="audio/mpeg">
            </audio>
        </div>
    </div>
    {{$slot}}
</div>