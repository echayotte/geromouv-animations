@extends('layouts.layout') @section('content')
<article class="page">
    <header class="entry-header">
        <h1 class="entry-title">Les animations de GEROMOUV'</h1>
    </header>
    <!-- .entry-header -->

    <div class="entry-content">
        <p>
            GEROMOUV' propose des activités en extérieur destinés aux seniors qui désirent pratiquer une activité physique adaptée à
            leur besoin.
        </p>
        <hr>
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Link with href
            </a>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                aria-controls="collapseExample">
                Button with data-target
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica,
                craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>
    </div>
    <!-- .entry-content -->
</article>
@endsection