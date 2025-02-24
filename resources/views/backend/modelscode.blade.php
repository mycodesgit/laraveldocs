@extends('layout.master')

@section('body')

<div class="col-lg-9">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title m-0 dot"></h5>
        </div>
        <div class="card-body" id="scrollme">
            <h3 class="title-doc">Eloquent ORM (Object Relational Mapper)</h3>
            <p style="text-align: justify; text-indent: 50px;">
                Laravel includes Eloquent, an object-relational mapper (ORM) that makes it enjoyable to interact with your database. When using Eloquent, each database table has a corresponding "Model" that is used to interact with that table. In addition to retrieving records from the database table, Eloquent models allow you to insert, update, and delete records from the table as well.
            </p>
            
            <br>

            <h3 class="title-doc">Generating Model Classes</h3>
            <p style="font-style: italic; color: #fff;">
                To get started, let's create an Eloquent model. Models typically live in the <b class="title-doc">app\Models</b> directory and extend the <b class="title-doc">Illuminate\Database\Eloquent\Model</b> class. You may use the <b class="ins-doc">make:model</b> Artisan command to generate a new model:
            </p>
            <code class="language-php" data-icon="&#xf0ea;">php artisan make:model Departments</code>
        </div>
    </div>
</div>

@endsection