@include('components.header')

<div id="body" class="container">

    <div class="row">

        <h3>List of contacts</h3>

        <!--<div class="list-group"> -->

        @foreach ($results as $res)
        
<!--             <a href="/list/{{$res->list_id}}" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$res->list_name}}</h5>
                <small class="text-success"> <b data-moment="{{$res->date_created}}"> </b> </small>
                </div>
                <p class="mb-1"> {{ $res->list_description }} </p>
                <small class="text-success"> <b> {{ $res->nbr }} contact </b> </small>
            </a> -->

            <div class="card bg-light mt-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h4 class="card-title">Light card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>

        @endforeach

        <!-- </div> -->

    </div>

</div>


@include("components.footer")
