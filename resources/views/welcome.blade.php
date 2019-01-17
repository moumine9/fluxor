@include('components.header')

<div id="body" class="container">

    @include('components.breadcrumb')

    <div class="row">
        <div class="col" style="margin-top:50px;margin-bottom:50px;">
            <div class="card card_bg text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <b>Lists</b>
                    <span class="fas fa-clipboard-list fa-2x fa-pull-right"></span>
                </div>
                <div class="card-body">
                    <h1 class="text-center">3</h1>
                </div>
            </div>
        </div>
        <div class="col" style="margin-top:50px;margin-bottom:50px;">
            <div class="card card_bg text-white ">
                <div class="d-flex justify-content-between align-items-center">
                    <b>Campaigns</b>
                    <span class="fas fa-suitcase fa-2x fa-pull-right"></span>
                </div>
                <div class="card-body">
                    <h1 class="text-center">30</h1>
                </div>
            </div>
        </div>
        <div class="col" style="margin-top:50px;margin-bottom:50px;">
            <div class="col">
                <div class="card card_bg text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <b>Texts sents</b>
                        <span class="fas fa-suitcase fa-2x fa-pull-right"></span>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">+1K</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-4">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
                <div class="card-header">Recent activity</div>
                <div class="card-body">

                    <ul id="log">

                        <li>
                            <span class="fas fa-suitcase fa-sm"></span> Created a new campaign </li>
                        <li>
                            <span class="fas fa-clipboard-list fa-sm"></span> New contact list updated </li>
                        <li>
                            <span class="fas fa-clipboard-list fa-sm"></span> Campaign completed. </li>

                    </ul>

                </div>
            </div>
        </div>

        <div class="col">

            <div class="list-group">

                <a></a>

                @foreach($lists as $l)

                <a href="/list/{{ $l->list_id }}" class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $l->list_name }} <span class="badge-success badge-pill pull-right">{{ $l->nbr }}</span>
                </a>

                @endforeach

            </div>

        </div>

        <div class="card border-dark">
            <div class="card-header">Campaigns</div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr class="table-active">
                            <th scope="col">Name</th>
                            <th scope="col">Date created</th>
                            <th scope="col">Date scheduled</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Default</th>
                            <td>Column content</td>
                            <td>Column content</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>


@include("components.footer")
