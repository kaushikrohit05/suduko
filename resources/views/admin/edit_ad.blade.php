@extends('layouts/admin')

@section('content')
<h1>Edit Ad</h1>
 
<form method="POST" action="{{ url('/admin/savead') }}" enctype="multipart/form-data" >
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">User</label>
        <select class="form-select" aria-label="Default select" name="user">
            <option value="">Select User</option>
            @foreach ($users as $user)
            <option value="{{ $user->id }}" {{$ad->userid == $user->id  ? 'selected' : ''}}>{{ $user->fname }} {{ $user->lname }} ( {{ $user->email_address }} )</option>
            @endforeach
          </select>
        <span class="text-danger">@error('user')
          {{ $message }}
        @enderror</span>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Category</label>
        <select class="form-select" aria-label="Default select" name="category">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{$ad->category_id == $category->id  ? 'selected' : ''}}>{{ $category->category }}</option>
            @endforeach
          </select>
        <span class="text-danger">@error('category')
          {{ $message }}
        @enderror</span>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Region</label>
        <select class="form-select" aria-label="Default select" name="region" id="region" >
            <option value="">Select Region</option>
            @foreach ($locations as $location)
            <option value="{{ $location->id }}"  {{$ad->region_id == $location->id  ? 'selected' : ''}}>{{ $location->location }}</option>
            @endforeach
          </select>
        <span class="text-danger">@error('region')
          {{ $message }}
        @enderror</span>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Location</label>
        <select class="form-select" aria-label="Default select" name="location" id="location">
             <option value="">Select Location</option>
             @foreach ($child_locations as $child_location )
             <option value="{{ $child_location->id }}"  {{$ad->location_id == $location->id  ? 'selected' : ''}}>{{ $child_location->location }}</option>
             @endforeach
          </select>
        <span class="text-danger">@error('location')
          {{ $message }}
        @enderror</span>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ad Title</label>
        <input type="text" class="form-control" id="ad_title" name="ad_title" placeholder="Ad Title" value="{{ $ad->title }}"  >  
        <span class="text-danger">@error('ad_title')
          {{ $message }}
        @enderror</span>      ad
      </div> 
      <div class="mb-3">
        <label  class="form-label">Ad Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="ad_desc" rows="3">{{ $ad->description }}</textarea>
        <span class="text-danger">@error('ad_desc')
          {{ $message }}
        @enderror</span> 
      </div> 
      <div class="mb-3">
        <label for="formFile" class="form-label">Ad Image</label>
        <input class="form-control" type="file" id="formFile" name="ad_image">
      </div> 
      
      <div class="mb-3">
        <label  class="form-label">Meta Title</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="meta_title" rows="3">{{ $ad->meta_title }}</textarea>
      </div>
      <div class="mb-3">
        <label  class="form-label">Meta Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="meta_description" rows="3">{{ $ad->meta_description }}</textarea>
      </div>
     <div class="mb-3">
        <label  class="form-label">Staus</label>
        <select class="form-select" aria-label="Default select example" name="isActive">
          <option value="1">Active</option>
          <option value="2">Inactive</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection


