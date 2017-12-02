@extends('layouts.main')

@section('title')
  Manage Category
@endsection

@section('page-title')
  SabiLawyer
@endsection

@section('category-active')
  active
@endsection

@section('content')

  <!-- main page content -->
  <div class="hero-body">
    <div class="container">
      <div class="columns is-multiline">
        <div class="column is-8">
          <!-- start of post -->
          <div class="box">
            <!-- box header -->
            <div class="box-header">
              <h4 class="title is-4">
                Manage Categories
                <span class="labels is-pulled-right">
                  <span class="tag is-light is-medium is-rounded"><a class="has-text-danger" href="#" onclick="triggerModal()">Add New Category</a></span>
                </span>
              </h4>
            </div>
            <!-- end of box header -->
            <!-- box content -->
            <div class="box-content">
              <div class="box-content-text">
                <table class="table">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Name</th>
                      <th colspan="2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$category->name}}</td>
                      <td><a class="button is-small is-warning" href="{{route('edit_category', $category->id)}}">Edit</a></td>
                      <td><a class="button is-small is-danger"  href="{{route('delete_category', $category->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="has-text-right">
                <a class="button is-small" href="{{route('index_page')}}">Back to Home</a>
              </div>
            </div>
            <!-- end box content -->
          </div>
          <!-- end of post -->
        </div>
        <!-- sidebar content -->
        @include('layouts.sidenav')
      </div>
    </div>
  </div>
  <!-- end of main page content -->
  <div class="modal" id="modal">
    <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Add New Category</p>
          <button class="delete" aria-label="close" onclick="discardModal()"></button>
        </header>
        <section class="modal-card-body">
          <div class="card-content-form">
            {{Form::open(array('route' => ['add_category'], 'method' => 'POST', 'files' => 'true'))}}
              {{ csrf_field() }}
              <div class="field">
                <label class="label">Title</label>
                <p class="control">
                  <input class="input" type="text" placeholder="Category name" name="name" required>
                </p>
              </div>
              <footer class="modal-card-foot">
                <button class="button">Save</button>
                <button class="button" onclick="discardModal()">Cancel</button>
              </footer>
            </form>
          </div>
        </section>
      </div>
  </div>

  <script>
    function triggerModal(){
        var modal = document.getElementById("modal").className += " is-active";
    }
    function discardModal(){
      var modal = document.getElementById("modal").className = document.getElementById("modal").className.replace( /(?:^|\s)is-active(?!\S)/g , '' );
    }
  </script>
@endsection
