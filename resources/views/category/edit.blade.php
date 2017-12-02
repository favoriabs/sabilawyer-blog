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
                Edit this category
                <span class="labels is-pulled-right">
                  <span class="tag is-light is-medium is-rounded"><a class="has-text-danger" href="{{route('manage_categories')}}">Manage Categories</a></span>
                </span>
              </h4>
            </div>
            <!-- end of box header -->
            <!-- box content -->
            <div class="box-content">
              <div class="box-content-text">
                {{Form::open(array('route' => ['update_category', $category->id], 'method' => 'POST', 'files' => 'true'))}}
                  {{ csrf_field() }}
                  <div class="field">
                    <label class="label">Title</label>
                    <p class="control">
                      <input class="input" type="text" placeholder="Category name" name="name" value="{{$category->name}}" required>
                    </p>
                  </div>
                  <footer class="modal-card-foot">
                    <button class="button">Save</button>
                  </footer>
                </form>
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
@endsection
