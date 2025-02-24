@extends('layout.master')

@section('body')

<div class="col-lg-9">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title m-0 dot"></h5>
        </div>
        <div class="card-body" id="scrollme">
            <h3 class="title-doc">Database Migration</h3>
            <p style="text-align: justify; text-indent: 50px;">
                Migrations are like version control for your database, allowing your team to define and share the application's database schema definition. If you have ever had to tell a teammate to manually add a column to their local database schema after pulling in your changes from source control, you've faced the problem that database migrations solve.
            </p>
            
            <br>

            <h3 class="title-doc">Generating Migrations</h3>
            <p style="font-style: italic; color: #fff;">
                You may use the <b class="ins-doc">make:migration</b> Artisan command to generate a database migration. The new migration will be placed in your <b class="title-doc">database/migrations</b> directory. Each migration filename contains a timestamp that allows Laravel to determine the order of the migrations:
            </p>
            <code class="language-php" data-icon="&#xf0ea;">php artisan make:migration create_department_table</code>
        </div>
    </div>
</div>

@endsection